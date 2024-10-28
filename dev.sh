#!/bin/bash

git pull
chmod -R 775 ./storage
composer install
npm install
npm run build
echo "Executing finished"
