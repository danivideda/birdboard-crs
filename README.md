# Birdboard

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

A trello like webapp using Laravel as the framework and MySQL for the database

## Install locally

Clone this repo to your machine
```
git clone https://github.com/danivideda/birdboard-crs.git
```
install dependencies :
```
composer install
npm install
```
Create the .env file and setup the database from your local machine (I've used my own database using MySQL)
```
cp .env.example .env
```
Generate new key in .env
```
php artisan key:generate
```
Migrate to create the database table
```
php artisan migrate
```
Run it
```
php artisan serve
```
