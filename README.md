
# Polymorphic Laravel

A simple project using polymorphism relationship in Laravel. This project demonstrate on how to perform Many-to-Many relationship between tables in polymorphism. 


## API Reference

#### Get all items

```http
  GET /api/v1/candidate
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | Optional. Filter results based on similar candidate name.|
| `role` | `string` | Optional. Filter results based on similar candidate role.|
| `age` | `integer` | Optional. Filter results based on matching candidate age.|


## Installation

Clone the project
```bash
  git clone https://github.com/nukipratama/polymorphism-api-laravel
```

Go to the project directory
```bash
  cd polymorphism-api-laravel
```

Install dependencies
```bash
  composer install
```

Create database with your preferred database name and assign the name to .env file. 
```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=polymorphic_api
DB_USERNAME=postgres
DB_PASSWORD=root
```

Run migration for creating required tables.
```bash
php artisan migrate
```

Run seeder to generate dummy data.
```bash
php artisan db:seed
```

Run project locally
```bash
php artisan serve
```
