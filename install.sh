#!/bin/bash

# Install php with necessary extensions

sudo apt-get install php7.2-cli unzip php-zip php-curl php-mbstring php-dom

# Install php composer

sudo curl -s https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Clone the template repository

git clone git@gitlab.developer.htiprojects.nl:hackathons/a-maze-ing-evening/a-maze-ing-client-php.git
cd a-maze-ing-client-php

# Restore the depedencies
composer install

echo Please set your API key in the MAZEKEY env var and run ./maze to execute maze.php

