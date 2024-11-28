#!/bin/bash

#Optimizing Cache Loading
cd /var/www/html/smoothswipe-ui && php artisan view:cache
