# Packt-Publication-Backend
 
## About the project
Packt-Publication is the online library and learning platform for professional developers. Learn Python, JavaScript, Angular, Web Development, App Development, Data Science and many more language with eBooks.


## Pacakges and Versions
- PHP - 8 
- Laravel - laravel/framework - "^9.19"
- Redis - predis/predis - "^2.0"


This project is responsible for handling eBooks API ans fetching from database and store it's cache data inside redis cache storage.

---
---

## Installation Process

### Clone this repo via below command,
```
git clone https://github.com/vikas-ukani/Packt-Publication-Backend.git
```

### copy .env file from .env.example
```
cp .env.example .env
```

### Install Packages
```
composer install 
```


### Generate app key
```
php artisan key:generate
```

