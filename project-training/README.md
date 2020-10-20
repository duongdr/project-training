Maganer project

Comes with:
- web-app: `Laravel/PHP-7.2`
- web-server: `Nginx:alpine`
- database: `Mysql-5.7.22`

## Installatioin
- `docker-compose up -d`
- `docker-compose exec app composer install`
- `docker-copmose exec app php artisan key:generate`
- `docker-compose exec app php artisan migrate --seed`

Now you can access `http://localhost/login` on your favorite browser
<br>
Login information: admin@gmail.com / 123456



