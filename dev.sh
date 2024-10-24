#!/bin/bash

git pull
chmod -R 775 ./storage
composer install
echo "Executing finished"
