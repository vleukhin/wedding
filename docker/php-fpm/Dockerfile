FROM php:7.4-fpm

RUN apt update && apt install -y zip unzip autoconf g++ libxml2-dev make vim libpng-dev libonig-dev libzip-dev&& \
    rm -rf /tmp/* && \
    rm -rf /var/cache/apt/archives/*

RUN pecl install xdebug-2.9.6
RUN docker-php-ext-install pdo pdo_mysql mbstring intl soap gd zip && \
    docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --no-interaction global require 'hirak/prestissimo'

WORKDIR /app

COPY --chown=1000:1000 ./composer* ./

COPY --chown=1000:1000 ./ ./

RUN sed -ri 's/^www-data:x:33:33:/www-data:x:1000:1000:/' /etc/passwd && \
    sed -ri 's/^www-data:x:33:/www-data:x:1000:/' /etc/group