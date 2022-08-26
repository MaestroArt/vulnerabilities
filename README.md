<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to install the project
Project is built on Laravel 9.26.1

- Run command `composer install` to load php packages
- Run command `npm install` to load js packages
- Run command `npm run build` to compile js & css assets
- copy .env from .env.example and change DB settings
- Run command `php artisan key:generate` to generate a project key
- Run `php artisan migrate` to run migrations
- Run `php artisan db:seed` to fill users and vulnerabilities tables
- Finally, run `php artisan serve` to launch the app
