## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

```cli
php artisan make:migration create_users_table --create=users
php artisan make:migration create_pages_table --create=pages
php artisan make:migration create_tags_table --create=tags
php artisan make:migration create_posts_table --create=posts
php artisan make:migration create_comments_table --create=comments
php artisan make:migration create_menus_table --create=menus
php artisan make:migration create_post_tags_table --create=post_tags
php artisan make:migration create_settings_table --create=settings
```

php artisan make:seeder UserTableSeeder
php artisan make:seeder PageTableSeeder
php artisan make:seeder TagTableSeeder
php artisan make:seeder PostTableSeeder
php artisan make:seeder CommentsTableSeeder
php artisan make:seeder MenuTableSeeder
php artisan make:seeder PostTagTableSeeder
php artisan make:seeder SettingTableSeeder

php artisan make:model User
php artisan make:model Page
php artisan make:model Tag
php artisan make:model Post
php artisan make:model Comment
php artisan make:model Menu
php artisan make:model PostTag
php artisan make:model Setting


php artisan make:request UserRequest
php artisan make:request PageRequest
php artisan make:request TagRequest
php artisan make:request PostRequest
php artisan make:request CommentRequest
php artisan make:request MenuRequest
php artisan make:request PostTagRequest
php artisan make:request SettingRequest




First Configure

# Command bellow

# To get all laravel package such as Illuminate/Html ...
composer install

# To get all bower package for frontend such as jquery, bootstap, angularjs ...
bower install