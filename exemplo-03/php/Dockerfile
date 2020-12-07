FROM php:7.3-apache

RUN pecl install redis-5.3.2 \
    && pecl install xdebug-2.9.0 \
    && docker-php-ext-enable redis xdebug

COPY php.ini /usr/local/etc/php/php.ini