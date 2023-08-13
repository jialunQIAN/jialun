## env
php version >8
composer


## laravel  use  SQLite

- php.ini    pdo_sqlite
- https://www.jianshu.com/p/f2d501830d06

##  查看表是否迁移

```php

php artisan migrate
 // new table
php artisan make:migration create_site_info_table --create=site_info
php artisan make:model site_info

php artisan make:model site_info -m -c -r
php artisan make:migration create_site_info_table --create=site_info




```

##  启动项目
```php
composer install
php artisan serve
php artisan serve --host=0.0.0.0 --port=8000
```
