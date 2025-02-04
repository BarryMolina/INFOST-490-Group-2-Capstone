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
>>> docker compose up --build
```

- Go to `http://localhost:8000` in your web browser

## Making Changes

You should follow these steps whenever you make changes to the codebase. Type these commands out into the terminal and run them one at a time, replacing `your-branch-name` with the name of your branch. DO NOT just copy and paste them as is.

- Create a new working branch

```bash
>>> cd INFOST-490-Group-2-Capstone # go to the root directory
>>> git pull # pull the latest changes on main
>>> git checkout -b your-branch-name # create a new working branch
```

- Make your changes and then create a commit. For more info on creating good commit messages, see https://www.freecodecamp.org/news/writing-good-commit-messages-a-practical-guide/

```bash
>>> git add . # stage all changes
>>> git commit -m "A descriptive commit message" # Describe what changes when this commit is applied. Ex. "Update map styling" or "Fix issue where courses don't load".
```

- Make more changes and commits as necessary
- If you would like to push YOUR branch to GitHub (for feedback, making sure your changes are saved somewhere other than your laptop, etc.) do:

```bash
>>> git checkout your-branch-name # make sure you're on your branch
>>> git push --set-upstream origin your-branch-name # This pushes the branch to GitHub
```

- Future pushes to `your-branch-name` can be done with just:

```bash
>>> git push
```

- When you're ready to merge your changes to the main branch:

```bash
>>> git checkout your-branch-name # make sure you're on your branch
>>> git git merge origin/main # merge any changes pushed by other team members. Resolve merge conflicts if necessary
>>> git checkout main # go back to the main branch
>>> git pull # pull latest changes
>>> git merge your-branch-name # merge your changes into main
>>> git push # push you changes to GitHub
>>> get branch -D your-branch-name # delete the branch since all the changes are on main now (optional)
```

For more information see https://docs.github.com/en/get-started/using-github/github-flow NOTE: the above instructions does not go through creating a PR, but you may do so if you wish.
