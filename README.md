# Packt-Publication-Backend
 
## About the project
Packt-Publication is the online library and learning platform for professional developers. Learn Python, JavaScript, Angular, Web Development, App Development, Data Science and many more language with eBooks.


## Pacakges and Versions
- PHP - 8 
- Laravel - laravel/framework - "^9.19"
- Redis - predis/predis - "^2.0"

---

## Features
This project is responsible for handling eBooks API ans fetching from database and store it's cache data inside redis cache storage.

- Database Migrations
- Database Factory
- Database Seeder
- Categories APIs
- Books APIs
- Redis Cache Management
- Pagination Implementation
- Database RelationShip

---

## Installation Process

### Clone this repo via below command,
```
git clone https://github.com/vikas-ukani/Packt-Publication-Backend.git
```

### Copy .env file from .env.example
```
cp .env.example .env
```

### Edit .env  and Set Database Configurations.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=packt-database
DB_USERNAME=root
DB_PASSWORD=
```

### Install Packages
```
composer install 
```


### Generate app key
```
php artisan key:generate
```


### Migrate database
```
php artisan migrate
```

OR with `--seed` flag to seed the database

``
php artisan migrate --seed
```

### Seed Data
```
php artisan db:seed
```
- It will create categories and random books factory data to testing more.

### Run the Project
```
php artisan serve
```

