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
cd LaravelBlogAssignment
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
Main page:

![main](https://user-images.githubusercontent.com/107758775/231650224-dd078a9d-6422-4178-aafe-3cef55871059.png)


Log in page:

![login](https://user-images.githubusercontent.com/107758775/231650410-e87bb445-c9ac-4c78-b4ff-f10e2dc7f9a3.png)


Register:

![register](https://user-images.githubusercontent.com/107758775/231650515-65fae032-cc36-43bf-a08d-f3c5e718176e.png)


About page:

![about](https://user-images.githubusercontent.com/107758775/231650566-7fd95607-37db-4218-ab3c-779d86fcc6ef.png)


and a page for every Article:

![article](https://user-images.githubusercontent.com/107758775/231650737-39736b2c-3a8c-407c-a2d6-293c9d8e2254.png)


## Conclusion

This project provides a basic foundation for a Laravel web application with user authentication and CRUD functionality. It can be used as a starting point for building a more complex web application.

Copyright (c) 2023, Max Base, Ali Ahmadi

