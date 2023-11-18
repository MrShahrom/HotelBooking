<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Hotel booking


## Installation

If you want to run this application for yourself, then follow these steps:

1. Install the project's dependencies: run the `composer install` command on the command line. This will install all required Laravel dependencies.

```ruby
composer install
```


2. Create a `.env` file: Copy the `.env.example` file in the project root directory and rename it to `.env`. This file contains settings for your development environment, such as database settings and application keys.



3. Generate the application key: At the command prompt, run `php artisan key:generate`. This will generate a unique application key that will be used to encrypt the data.



```ruby
php artisan key:generate
```

4. Run database migrations with fake data autoseeding: At the command prompt, run `php artisan migrate --seed`. This will create the necessary tables in the database defined in the migrations and populate with fake data.


```ruby
php artisan migrate 
```



5. Start the web server: At the command prompt, run the `php artisan serve` command. This will start Laravel's built-in web server, which will listen on the default port (usually 8000).

```ruby
php artisan serve
```

After completing these steps, your Laravel project should be successfully configured and ready to go. You can open its web interface by going to `http://localhost:8000` (or another port if you have changed it).


