# Car & Classic - Assignment

## Getting started

Please run the following commands to set up your environment:

```shell
cp .env.example .env
composer install
yarn install
php artisan migrate --force
php artisan db:seed
```

Now run these commands to start the built-in web server and compile front-end assets.

- `php artisan serve`
- `yarn dev`

## Running tests

- Back-end tests: `php artisan test`
- Front-end tests: `yarn test`
