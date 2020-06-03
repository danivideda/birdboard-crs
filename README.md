# Birdboard

<p align="center"><img src="public/images/logo.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

A trello like webapp using Laravel as the framework and MySQL for the database

## Install locally

1. Clone this repo to your machine
    > git clone https://github.com/danivideda/birdboard-crs.git
2. install dependencies :
    > composer install
    > npm install
3. Create the .env file and setup the database from your local machine (I've used my own database using MySQL)
    > cp .env.example .env
4. Generate new key in .env
    > php artisan key:generate
5. Migrate to create the database table
    > php artisan migrate
6. Run it
    > php artisan serve
