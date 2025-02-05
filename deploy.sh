#! /bin/bash

rsync -r --chown=www-data:www-data $PROJECT_ROOT/public/ $WEB_ROOT # copy over website files
$PROJECT_ROOT/migrations/migrate.sh # run migrations