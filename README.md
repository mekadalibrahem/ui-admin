# ui-admin
    this package provider ui desing for admin dashboard  with livewire and routes 

## usage  

1. download package  
    ```php 
        composer require mekadalibrahem\ui-admin 
    ``` 
2. install package 
    ```php 
        php artisan uiadmin:install 
    ```
3. this package use Spatie\Permission package for user roles and permissions  
so publich it  
```php 
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```
4. clear cache 
    ```php 
        php artisan cache:clear 
    ``` 
5. migrate database 
    ```php
        php artisan migrate
    ``` 



