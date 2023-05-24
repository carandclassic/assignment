# Car & Classic - Assignment

> Skeleton repo for Car & Classic code assignment. You will be given the actual assignment during the live-coding pair-programming session. 

## Prerequisites 

- npm
- PHP >= 8.1
- Composer
- yarn

## Package contains

- Laravel 10
- PHPUnit
- VueJS using Vite
- Jest
- SQLite

## Get familiar with code

- Database: `database/migrations/2023_05_24_144550_create_cars_table.php`
- PHPUnit: `/tests`
- Endpoint `/cars` - `routes/api.php`
- VueJS: `resources/js/Pages/Home.vue`
- Tailwind: `resources/css`
- Jest: `resources/js/Components/Car.spec.js`

## Install

Run the following commands to set up your environment:

```shell
cp .env.example .env
composer install
yarn install
php artisan migrate --force
php artisan db:seed
```

## Run servers

- `php artisan serve`
- `yarn dev`

## Run tests

- Back-end tests: `php artisan test`
- Front-end tests: `yarn test`
