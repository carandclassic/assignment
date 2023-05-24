# Car & Classic - Assignment

> Skeleton repo for Car & Classic code assignment. You will be given the actual assignment during the live-coding pair-programming session. 

## Prerequisites

- PHP 8.1 or newer
- Composer
- Node.js 18
- Yarn

## Package contains

- Laravel 10
- PHPUnit 10
- Vue.js 3
- Vite.js
- Vitest
- SQLite DB

## Get familiar with code

- Routes: `routes/`
  - API endpoint in `api.php`
  - Home endpoint in `web.php`
- Migrations: `database/migrations/`
  - Important: `2023_05_24_144550_create_cars_table.php`
- Front-end pages and components: `resources/js/`
  - Home page: `Pages/Home.vue`
  - Components: `Components/`
- Front-end test using `vitest` and `@vue/test-utils`: `resources/js/Components/Car.spec.js`
- Tests (PHPUnit) `tests/`

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
