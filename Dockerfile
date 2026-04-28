FROM php:8.4.20-apache
COPY src/ /var/www/html/

COPY src/form.php /var/www/html/
COPY src/confirm.php /var/www/html/
