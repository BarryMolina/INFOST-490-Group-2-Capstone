#! /bin/bash

project_root=$1
web_root=$2
rsync -r --chown=www-data:www-data ${project_root}/public/ ${web_root}