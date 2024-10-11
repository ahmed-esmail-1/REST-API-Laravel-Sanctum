


composer create-project laravel/laravel REST-API-Laravel-Sanctum "8.*"

php artisan make:model Product --migration

php artisan migrate

php artisan make:controller ProductController 

composer require laravel/sanctum

php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
