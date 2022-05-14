FROM php:8.1-fpm-alpine
RUN apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS \
    && pecl install -o -f igbinary \
    && docker-php-ext-enable igbinary \
    && cd /usr/src \
    && pecl bundle redis \
    && docker-php-ext-configure /usr/src/redis --enable-redis-igbinary \
    && docker-php-ext-install -j$(nproc) /usr/src/redis \
    && docker-php-ext-enable redis \
    && apk del -f .phpize-deps \
    && rm -rf /usr/src/*

