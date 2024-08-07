# Car & Classic - Assignment

> Skeleton repo for Car & Classic code assignment. You will be given the actual assignment during the live-coding pair-programming session. 

## Overview

### Package contains

- Laravel 10
- PHPUnit 10
- Vue.js 3
- TailwindCSS 3
- Vite.js
- Vitest
- SQLite DB

### Get familiar with code

- Routes: `routes/`
  - API endpoint in `api.php`
  - Home endpoint in `web.php`
- Migrations: `database/migrations/`
  - Important: `2023_05_24_144550_create_cars_table.php`
- Front-end pages and components: `resources/js/`
  - Home page: `Pages/Home.vue`
  - Components: `Components/`
- Front-end test using `vitest` and `@vue/test-utils`: `resources/js/Components/Car.spec.js`
- Back-end tests using `phpunit`: `tests/`

## Set up environment

### Prerequisites

- PHP 8.1 or newer
- Composer
- Node.js 18
- Yarn

### Install dependencies and migrate database

Run the following commands to set up your environment:

```shell
cp .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

vendor/bin/sail yarn install
vendor/bin/sail artisan migrate --force
vendor/bin/sail artisan db:seed
```

### Start the project

- Back-end: `vendor/bin/sail up -d`
- Front-end: `vendor/bin/sail yarn dev`

### Run tests

- Back-end: `vendor/bin/sail test`
- Front-end: `vendor/bin/sail yarn test`
