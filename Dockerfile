FROM php:8.2-apache

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/login \
 && chmod -R 777 /var/www/html/login

EXPOSE 80
