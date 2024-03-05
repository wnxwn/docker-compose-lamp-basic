# Add PHP-Apache base image
FROM php:8.3-apache
# Install your extensions to connect to MySQL and add mysqli
RUN docker-php-ext-install mysqli
# Install pdo is you need to use PHP PDO
RUN docker-php-ext-install pdo pdo_mysql
