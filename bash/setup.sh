#!/bin/sh

sudo chown -R :www-data /var/www/fidel
sudo chmod -R 775 /var/www/fidel/storage
sudo chmod -R 775 /var/www/fidel/bootstrap/cache

sudo ln -s /usr/share/phpmyadmin /var/www/fidel/public 