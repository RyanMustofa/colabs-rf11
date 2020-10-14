-   clone the project.

```
git clone https://github.com/Zainal21/SMKN2KRA-E-Commerce-Backend.git
```

-  install dependency 

```
composer install
```
- Migrate Database
```
php artisan migrate --seed
```

- Create JWT Secret Key
```
php artisan jwt:secret
```

- Change env.example to .env 

```
cp .env.example to .env
```

- Generate Secret Key Laravel 
```
php artisan key:generate
```

- Run laravel project
```
php artisan serve
```

- API DOC
```
localhost:8000/docs
```
