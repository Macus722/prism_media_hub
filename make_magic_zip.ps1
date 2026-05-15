# Run from project root: cd c:\Users\desmo\Herd\prism_media_hub then .\make_magic_zip.ps1
# Creates prism_media_hub_deploy_magic.zip with Pre-Configured settings!

$projectRoot = if (Test-Path "$PSScriptRoot\artisan") { $PSScriptRoot } else { Get-Location }
$parentDir = Split-Path $projectRoot -Parent
$zipPath = Join-Path $parentDir "prism_media_hub_deploy_magic.zip"

$excludeDirs = @('node_modules', '.git', '.idea', '.vscode', 'storage\framework\cache', 'bootstrap\cache')
$excludePathParts = @('storage\log', 'storage\framework\session', 'storage\framework\view', 'storage\framework\cache\data')

# 1. Create a production ready .env file using the local one
$envContent = Get-Content "$projectRoot\.env" -Raw
$envContent = $envContent -replace 'APP_ENV=local', 'APP_ENV=production'
$envContent = $envContent -replace 'APP_DEBUG=true', 'APP_DEBUG=false'
$envContent = $envContent -replace 'APP_URL=http://prism.test', 'APP_URL=https://prismmediahub.com'
Set-Content "$projectRoot\.env.magic" $envContent

Add-Type -AssemblyName System.IO.Compression.FileSystem
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }
$zip = [System.IO.Compression.ZipFile]::Open($zipPath, 'Create')

try {
    Get-ChildItem -Path $projectRoot -Recurse -File -Force | ForEach-Object {
        $full = $_.FullName
        $rel = $full.Substring($projectRoot.Length).TrimStart('\')
        $skip = $false
        
        # Skip explicitly
        if ($rel -eq '.env' -or $rel -match 'deploy.*\.zip' -or $rel -eq '.env.magic' -or $rel -eq 'upload-via-ftp.ps1') { return }

        foreach ($e in $excludeDirs) {
            if ($rel.StartsWith($e + '\') -or $rel.StartsWith($e + '/') -or $rel -eq $e) { $skip = $true; break }
        }
        foreach ($p in $excludePathParts) {
            if ($rel -like "$p*") { $skip = $true; break }
        }

        if (-not $skip) {
            # Magic Renames!
            if ($rel -eq 'htaccess') { $entryName = '.htaccess' }
            elseif ($rel -eq 'public\htaccess' -or $rel -eq 'public/htaccess') { $entryName = 'public/.htaccess' }
            else { $entryName = $rel.Replace('\', '/') }

            $entry = $zip.CreateEntry($entryName)
            $stream = $entry.Open()
            try { [System.IO.File]::OpenRead($full).CopyTo($stream) } finally { $stream.Close() }
        }
    }
    
    # Pack the magic .env
    $entry = $zip.CreateEntry('.env')
    $stream = $entry.Open()
    try { [System.IO.File]::OpenRead("$projectRoot\.env.magic").CopyTo($stream) } finally { $stream.Close() }

} finally {
    $zip.Dispose()
    if (Test-Path "$projectRoot\.env.magic") { Remove-Item "$projectRoot\.env.magic" -Force }
}

if (Test-Path $zipPath) {
    $mb = [math]::Round((Get-Item $zipPath).Length / 1MB, 2)
    Write-Host "Created: $zipPath" -ForegroundColor Green
    Write-Host "Size: $mb MB"
} else {
    Write-Host "Zip was not created." -ForegroundColor Red
}
