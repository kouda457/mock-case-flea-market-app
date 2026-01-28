# coachtechフリマ

## 環境構築

### Docker ビルド

1. git clone git@github.com:kouda457/mock-case-flea-market-app.git
1. docker-compose up -d --build


### Laravel 環境構築

```
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

1. php artisan key:generate
2. php artisan migrate
3. php artisan db:seed


## 使用技術

- MySQL 8.0.26
- PHP 8.4.6-fpm
- Laravel 8.83.29

## URL

- 環境開発: http://localhost/login
- phpMyAdmin: http://localhost:8080/

## ER 図

![image](flea-market.drawio.png)

# mock-case-flea-market-app
