#!/bin/bash

#Optimizing View Loading
cd /var/www/html/smoothswipe-ui && php artisan view:cache

#Optimizing Cache Loading
cd /var/www/html/smoothswipe-ui && php artisan view:clear


#Bundling Frontend Assests
# cd /var/www/html/smoothswipe-ui && npm run build
# echo "Starting build script"
# cd /var/www/html/smoothswipe-ui
# echo "Current directory: $(pwd)"
# npm run build
