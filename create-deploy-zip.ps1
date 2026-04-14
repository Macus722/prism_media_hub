# Run from project root: cd c:\Users\desmo\Herd\prism_media_hub then .\create-deploy-zip.ps1
# Creates prism_media_hub_deploy.zip excluding node_modules, vendor, .git (smaller = easier upload)

$projectRoot = if (Test-Path "$PSScriptRoot\artisan") { $PSScriptRoot } else { Get-Location }
$parentDir = Split-Path $projectRoot -Parent
$zipPath = Join-Path $parentDir "prism_media_hub_deploy.zip"

$excludeDirs = @('node_modules', 'vendor', '.git', '.idea', '.vscode')
$excludePathParts = @('storage\log', 'storage\framework\session', 'storage\framework\view', 'storage\framework\cache\data')

Add-Type -AssemblyName System.IO.Compression.FileSystem
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }
$zip = [System.IO.Compression.ZipFile]::Open($zipPath, 'Create')

try {
    Get-ChildItem -Path $projectRoot -Recurse -File -Force | ForEach-Object {
        $full = $_.FullName
        $rel = $full.Substring($projectRoot.Length).TrimStart('\')
        $skip = $false
        foreach ($e in $excludeDirs) {
            if ($rel.StartsWith($e + '\') -or $rel.StartsWith($e + '/') -or $rel -eq $e) { $skip = $true; break }
        }
        foreach ($p in $excludePathParts) {
            if ($rel -like "$p*") { $skip = $true; break }
        }
        if (-not $skip) {
            $entryName = $rel.Replace('\', '/')
            $entry = $zip.CreateEntry($entryName)
            $stream = $entry.Open()
            try {
                [System.IO.File]::OpenRead($full).CopyTo($stream)
            } finally { $stream.Close() }
        }
    }
} finally {
    $zip.Dispose()
}

if (Test-Path $zipPath) {
    $mb = [math]::Round((Get-Item $zipPath).Length / 1MB, 2)
    Write-Host "Created: $zipPath" -ForegroundColor Green
    Write-Host "Size: $mb MB"
} else {
    Write-Host "Zip was not created." -ForegroundColor Red
}
