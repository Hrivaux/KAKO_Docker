
FROM php:7.4-apache


COPY ./index.php /var/www/html/
COPY ./inner-page.html /var/www/html/
COPY ./forms /var/www/html/forms
COPY ./assets /var/www/html/assets


EXPOSE 80
