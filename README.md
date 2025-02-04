# INFOST-490-Group-2-Capstone

Senior Capstone project for INFOST 490-201 Group 2

## File Structure

- `/` The project root
- `/.gitignore` Files listed here will be ignored by git. For env files, api keys, etc.
- `/.compose.yml` The Docker Compose file for local development
- `/public` Everything in here will be exposed to the webserver
- `/public/header.php` Top level HTML template. Include this in all pages
- `/public/index.php` The home page.
- `/public/js` JavaScript files
- `/public/styles` CSS style sheets

## Local Development Setup

- Download and install Docker Desktop https://docs.docker.com/desktop/setup/install/windows-install/

- From the root directory run:

```bash
docker compose up --build
```

- Go to `http://localhost:8000` in your web browser
