# Getting started

## Installation

Please check the official Laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)



Clone the repository..

    git clone https://github.com/MSYK28/openMart
    
Cloning from a specific branch

     git clone --single-branch --branch develop https://github.com/MSYK28/openMart
    
Switch to the repo folder

    cd openmart

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Run the seeders

    php artisan db:seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000