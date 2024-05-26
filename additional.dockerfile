# Add PHP-Apache base image
FROM php:8.3-apache
# Install pdo you need to use PHP PDO
RUN docker-php-ext-install pdo pdo_mysql
# Get the Xdebug extension
# Enable the installed Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug
