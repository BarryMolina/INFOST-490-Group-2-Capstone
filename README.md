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
- `/.github/workflows` GitHub Action workflows, including `deploy.yml` for automating deployments
- `/migrations` Where database migrations are stored. Follows the format `version-xxxx.sql`
- `/Taskfile.yml` A collection of useful commands for managing the project. For example starting and stopping docker containers

## Local Development Setup

- Download and install Docker Desktop https://docs.docker.com/desktop/setup/install/windows-install/
- Install Task to run commands in `Taskfile.yml` https://taskfile.dev/installation/

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

## Database Migrations

- All database migrations are stored in the `migrations/` folder with the format `version-xxxx.sql`
- To create a new migration, manually create the next file in the sequence. For example `version-0002.sql` after `version-0001.sql`
- In the file, add your sql statements. You can assume that all previous migrations have been applied
- To update the database running in docker, run `task db:migrate`
- The production database will get updated when the new migration file is pushed to the `main` branch

NOTE: to reset applied migrations, for example after running `task db:down` to reset the database, simply delete `migrations/.applied_migrations`. Then run `task db:migrate` to restore the database structure.

## Deployment

- Simply merge your changes into the main branch and push to GitHub. This will trigger a GitHub Action that automatically deploys your code to the production server and runs any new migrations.
