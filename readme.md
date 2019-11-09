<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## CLI

#### Make Auth

    composer require laravel/ui --dev

    php artisan ui vue --auth

    npm install

    npm run dev

#### Database

    Seeder

        php artisan make:seeder ModelTableSeeder

        php artisan db:seed

    Factory

        php artisan make:factory ModelFactory

        php artisan tinker

        factory(App\Model::class,50)->create();

    Migrations

        php artisan make:migration create_models_table

        php artisan migrate
        php artisan migrate:rollback
        php artisan migrate:refresh
    
#### Controller

        php artisan make:controller ModelController

#### Model

        php artisan make:model Model

#### Route

    Route::method('uri','ModelController@method')->name(method);







    
