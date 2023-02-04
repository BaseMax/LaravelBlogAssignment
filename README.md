# Laravel Blog Assignment PHP Project

Laravel Blog Assignment Project

## Introduction

This project is an assignment for Laravel web framework. The goal is to create a basic web application with user authentication and CRUD functionality for a blog.

## Requirements
- PHP 7.4 or higher
- Laravel 8.x
- MySQL or MariaDB

## Installation

Clone the repository to your local machine

```bash
git clone https://github.com/BaseMax/LaravelBlogAssignment.git
```

Navigate to the project directory
```bash
cd laravel-assignment
```

Install dependencies with Composer
```
composer install
```

Copy the .env.example file to .env
```bash
cp .env.example .env
```

Generate an application key
```
vbnet
php artisan key:generate
```

Configure the database settings in the .env file
```
makefile
```

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_assignment
DB_USERNAME=root
DB_PASSWORD=
```

Run the migrations to create the necessary tables
```
php artisan migrate
```

Start the built-in development server
```
php artisan serve
```

## Features

- User authentication (register, login, logout)
- CRUD functionality for blog posts
- Pagination for blog posts
- Search functionality for blog posts
- Admin panel to manage users and blog posts

## Screenshots

TODO screenshots here...

## Conclusion

This project provides a basic foundation for a Laravel web application with user authentication and CRUD functionality. It can be used as a starting point for building a more complex web application.

Copyright (c) 2023, Max Base, Ali Ahmadi

