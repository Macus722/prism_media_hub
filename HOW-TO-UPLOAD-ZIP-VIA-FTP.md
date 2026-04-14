# How to Upload Your Zip File (Pick One Method)

You only need: your zip file. **FileZilla is optional** — see options below.

---

## Step 1: Create the zip file (everyone does this)

1. Press **Windows key**, type **PowerShell**, open it.
2. Type this and press Enter:
   ```
   cd c:\Users\desmo\Herd\prism_media_hub
   ```
3. Type this and press Enter:
   ```
   .\create-deploy-zip.ps1
   ```
4. When it finishes, the zip is here: **`c:\Users\desmo\Herd\prism_media_hub_deploy.zip`**

---

## Step 2: Upload the zip — choose ONE way

### Option A: Browser (Namecheap File Manager) — no extra software

1. Log in to **Namecheap** → **Hosting** → **Manage** → open **File Manager** (or **cPanel** → **File Manager**).
2. Go to the folder where the site should be (e.g. **`public_html`** or **`prismmediahub.com`** or **`deploy`**).
3. Click **Upload**.
4. Click **Select File** (or drag and drop) and choose **`c:\Users\desmo\Herd\prism_media_hub_deploy.zip`**.
5. Wait for the upload to finish. If it fails (e.g. “quota” or “folder”), try **Option B** (PowerShell FTP) or **Option C** (FileZilla).
6. Then: **right-click** the zip in File Manager → **Extract**. Done.

---

### Option B: PowerShell script (no FileZilla)

1. Open the file **`upload-via-ftp.ps1`** in your project (in Notepad or VS Code).
2. Find the line **`$ftpPassword = "YOUR_FTP_PASSWORD_HERE"`** and replace **`YOUR_FTP_PASSWORD_HERE`** with your real FTP password. Save.
3. In PowerShell, from the project folder, run:
   ```
   .\upload-via-ftp.ps1
   ```
4. The script uploads the zip to your server. Then go to **File Manager** in Namecheap, open that folder, **right-click** the zip → **Extract**.

*(If you need to change the FTP host or path, edit the top lines in `upload-via-ftp.ps1`.)*

---

### Option C: curl (one command, if you have curl)

Open **Command Prompt** or **PowerShell** and run (replace `YOUR_PASSWORD`, host, and path if different):

```
cd c:\Users\desmo\Herd
curl -T prism_media_hub_deploy.zip -u "deploy@prismmediahub.com.newsstraits.com:YOUR_PASSWORD" ftp://prismmediahub.com.newsstraits.com/home/newsstxd/prismmediahub.com/deploy/
```

Then in **File Manager** go to that folder and **Extract** the zip.

---

### Option D: FileZilla (if you prefer a desktop FTP app)

1. Log in to **Namecheap** → **Hosting List** → click **Manage** for your hosting.
2. Find **FTP** or **FTP Accounts** (or **cPanel** → then **FTP Accounts**).
3. Write down:
   - **FTP server / host:** e.g. `prismmediahub.com.newsstraits.com` or `ftp.prismmediahub.com`
   - **Username:** e.g. `deploy@prismmediahub.com.newsstraits.com` or `deploy`
   - **Password:** (the one you set for this FTP user, or reset it there)

---

## Step 3: Upload the zip with FileZilla

1. **Open FileZilla.**

2. At the **top**, fill in:
   - **Host:** your FTP host (e.g. `prismmediahub.com.newsstraits.com`)
   - **Username:** your FTP username
   - **Password:** your FTP password
   - **Port:** leave **21** (or blank).

3. Click **Quickconnect**.

4. **Right side (server):** you’ll see folders. Go to the folder where the site should be, e.g.:
   - `public_html` or  
   - `prismmediahub.com` or  
   - `deploy`  
   (double-click folders to open them until you’re in the right place.)

5. **Left side (your PC):** go to the folder where the zip is:
   - Click the folder icon with “…” or use the path bar.
   - Go to: **`C:\Users\desmo\Herd`**
   - You should see **`prism_media_hub_deploy.zip`**.

6. **Upload:**  
   On the **left**, **right-click** `prism_media_hub_deploy.zip` → click **Upload**.  
   Or drag `prism_media_hub_deploy.zip` from the **left** side to the **right** side.

7. Wait until the file appears on the right and the transfer shows as finished. Done.

---

## After upload: Extract the zip on the server (all options)

FileZilla only uploads the zip; it doesn’t extract it. So after **any** upload method:

1. Log in to **Namecheap** → **Hosting** → **File Manager** (or **cPanel** → **File Manager**).
2. Go to the **same folder** where you uploaded the zip (e.g. `public_html` or `deploy`).
3. Find **`prism_media_hub_deploy.zip`**.
4. **Right-click** it → **Extract** (or **Extract** in the toolbar).
5. Choose “Extract here” or “Extract to current folder” and confirm.
6. After extraction, you’ll have all the project folders (`app`, `public`, etc.). Then follow **UPLOAD_NAMECHEAP.md** for `.env` and document root.

---

## Summary

| Step | What you do |
|------|-------------|
| 1 | Run `create-deploy-zip.ps1` → zip is in `c:\Users\desmo\Herd\` |
| 2 | **Upload** with one of: **A** Browser (File Manager), **B** PowerShell script, **C** curl, **D** FileZilla |
| 3 | In cPanel File Manager: go to that folder, right-click zip → Extract |

No FileZilla needed unless you choose Option D.
