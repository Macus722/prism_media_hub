# Upload prism_media_hub_deploy.zip via FTP to Namecheap
# 1. Run create-deploy-zip.ps1 first (creates the zip)
# 2. Edit below: set $ftpPassword, then run this script

$ftpHost = "prismmediahub.com.newsstraits.com"
$ftpUser = "deploy@prismmediahub.com.newsstraits.com"
$ftpPassword = "YOUR_FTP_PASSWORD_HERE"   # <-- Replace with your actual password
$remotePath = "/home/newsstxd/prismmediahub.com/deploy"
$zipName = "prism_media_hub_deploy.zip"
$zipPath = Join-Path (Split-Path $PSScriptRoot -Parent) $zipName

if (-not (Test-Path $zipPath)) {
    Write-Host "Zip not found. Run create-deploy-zip.ps1 first from project folder." -ForegroundColor Red
    exit 1
}

if ($ftpPassword -eq "YOUR_FTP_PASSWORD_HERE") {
    Write-Host "Edit this script and set `$ftpPassword to your real FTP password." -ForegroundColor Red
    exit 1
}

$ftpUri = "ftp://$ftpHost$remotePath/$zipName"
Write-Host "Uploading to $ftpUri ..."

$request = [System.Net.FtpWebRequest]::Create($ftpUri)
$request.Method = [System.Net.WebRequestMethods+Ftp]::UploadFile
$request.Credentials = New-Object System.Net.NetworkCredential($ftpUser, $ftpPassword)
$request.UseBinary = $true
$request.UsePassive = $true
$request.KeepAlive = $false

$fileContent = [System.IO.File]::ReadAllBytes($zipPath)
$request.ContentLength = $fileContent.Length
$requestStream = $request.GetRequestStream()
try {
    $requestStream.Write($fileContent, 0, $fileContent.Length)
} finally {
    $requestStream.Close()
}

$response = $request.GetResponse()
Write-Host "Upload done: $($response.StatusDescription)" -ForegroundColor Green
$response.Close()

Write-Host "Next: In cPanel File Manager go to $remotePath, then Extract the zip."
