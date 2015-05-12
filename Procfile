web: vendor/bin/heroku-php-apache2 public/
pretend: .heroku/php/bin/php artisan migrate --pretend --force -vvv 2>&1
migrate: .heroku/php/bin/php artisan migrate --force -vvv 2>&1
