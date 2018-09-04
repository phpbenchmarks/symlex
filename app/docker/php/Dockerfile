FROM php:7.2-fpm-alpine

RUN apk update \
    && apk upgrade --available \
    && apk add --virtual build-deps \
        autoconf \
        build-base \
        icu-dev \
        libevent-dev \
        openssl-dev \
    && apk add \
        bzip2 \
        git \
        zlib\
        zlib-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN docker-php-ext-install -j$(getconf _NPROCESSORS_ONLN) \
    intl \
    mbstring \
    zip

COPY ./ /var/www/html

RUN mkdir -p \
        /var/www/html/bin \
        /var/www/html/vendor \
        /var/www/html/storage

RUN composer install --no-dev --no-interaction

RUN chown -R www-data:www-data /var/www/html/storage