# Upload this project to Namecheap

## Step 1: Create a small deployment zip (on your PC)

1. Open **PowerShell**.
2. Go to your project folder:
   ```powershell
   cd c:\Users\desmo\Herd\prism_media_hub
   ```
3. Run the zip script (excludes `node_modules`, `vendor`, `.git` so the zip stays small):
   ```powershell
   .\create-deploy-zip.ps1
   ```
4. You’ll get **`prism_media_hub_deploy.zip`** in `c:\Users\desmo\Herd\` (one folder above the project). Use this file to upload.

If the script doesn’t run (execution policy), run once:
```powershell
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
```

---

## Step 2: Upload to Namecheap

### Option A: cPanel File Manager

1. Log in to **Namecheap** → **Hosting List** → **Manage** (your hosting).
2. Open **File Manager** (or **cPanel** → **File Manager**).
3. Go to the folder for your site, e.g. **`/home/newsstxd/prismmediahub.com`** (or `public_html`).
4. Click **Upload**.
5. Choose **`prism_media_hub_deploy.zip`** (from `c:\Users\desmo\Herd\`).  
   - If upload fails (quota or error): check **Disk usage** in cPanel and free space if needed; try a smaller zip or use FTP (Option B).
6. After upload, **right‑click the zip** → **Extract**.
7. Move contents out of the extracted folder if needed so the Laravel files (e.g. `app`, `public`, `artisan`) are directly inside the site folder (e.g. `prismmediahub.com`).

### Option B: FTP (e.g. FileZilla)

1. In Namecheap/cPanel get your **FTP** host, username, and password.
2. In FileZilla: connect to the host, log in.
3. On the **server** side, go to the site folder (e.g. `prismmediahub.com` or `public_html`).
4. From the **local** side, go to `c:\Users\desmo\Herd\` and drag **`prism_media_hub_deploy.zip`** into the server folder.
5. When the zip is uploaded, in the server panel right‑click it → **File permissions** is not needed for extract; use cPanel **File Manager** to **Extract** the zip if FileZilla doesn’t allow extract.

---

## Step 3: After extract on the server

1. **Set `.env`**
   - Copy **`env`** to **`.env`** in the project root (same place as `artisan`).
   - Edit **`.env`**: set `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://prismmediahub.com`, and your **DB_HOST**, **DB_DATABASE**, **DB_USERNAME**, **DB_PASSWORD** (from Namecheap/cPanel MySQL).

2. **Use the right htaccess**
   - If the server doesn’t see **`.htaccess`**, rename **`htaccess`** → **`.htaccess`** in the project root, and **`public/htaccess`** → **`public/.htaccess`**.

3. **Document root**
   - Point the domain to the **`public`** folder (e.g. `prismmediahub.com/public` or set “Document Root” to `.../prismmediahub.com/public`).  
   - If you can’t change document root, the **root `.htaccess`** we added will send requests into `public/`; then the domain can point at the project root.

4. **Permissions** (if you get “permission denied” or “failed to write”)
   - Set **`storage`** and **`bootstrap/cache`** to writable (e.g. 755 or 775). In cPanel File Manager: right‑click folder → Change Permissions → check Write for Owner/Group.

5. **Install PHP dependencies** (if you excluded `vendor` from the zip)
   - If your host has **SSH**: go to the project root and run `composer install --no-dev`.  
   - If no SSH: create the zip again **including** the `vendor` folder (don’t run the script; zip the whole project but exclude only `node_modules` and `.git`).

---

## Quick checklist

| Step | Done |
|------|------|
| Run `create-deploy-zip.ps1` and get `prism_media_hub_deploy.zip` | ☐ |
| Upload zip to `/home/newsstxd/prismmediahub.com` (or your site folder) | ☐ |
| Extract zip in File Manager | ☐ |
| Copy `env` → `.env` and edit (APP_URL, DB_*) | ☐ |
| Rename `htaccess` → `.htaccess`, `public/htaccess` → `public/.htaccess` if needed | ☐ |
| Point domain document root to `public` (or leave root and use root .htaccess) | ☐ |
| Set `storage` and `bootstrap/cache` writable | ☐ |
