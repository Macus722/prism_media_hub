
Add-Type -AssemblyName System.Drawing
$img = [System.Drawing.Bitmap]::FromFile("temp_logo.png")
$color = $img.GetPixel(10, 10)
Write-Host "$($color.R) $($color.G) $($color.B)"
