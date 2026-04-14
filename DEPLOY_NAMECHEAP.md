# Namecheap deployment – required files

Make sure these three are on the server:

## 1. `.env` (root)

- **Do not** commit `.env` to git (it’s in `.gitignore`).
- On Namecheap:
  - Either upload your local `.env` via FTP/File Manager, or  
  - Copy `env.example` to `.env` on the server and edit values (APP_URL, DB_*, etc.).

## 2. `.htaccess` (project root)

- **Root `.htaccess`** – redirects all requests to `public/`.  
  It’s in the repo; ensure it’s uploaded to the same folder as `app/`, `public/`, etc.

## 3. `public/.htaccess`

- **`public/.htaccess`** – Laravel front controller (rewrite to `index.php`).  
  It’s in the repo; ensure it’s inside the `public` folder on the server.

---

## Quick checklist

| File              | Location   | In Git | Action on Namecheap                          |
|-------------------|------------|--------|----------------------------------------------|
| `.env`            | project root | No   | Upload manually or copy from `env.example`   |
| `.htaccess`       | project root | Yes  | Deploy with repo (root of project)           |
| `public/.htaccess`| inside `public/` | Yes | Deploy with repo (inside `public` folder) |

After upload, set permissions if needed (e.g. `storage` and `bootstrap/cache` writable) and run `php artisan config:cache` if you use config caching.
