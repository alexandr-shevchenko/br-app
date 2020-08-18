FROM php:7.4.5-fpm-alpine AS build

RUN apk upgrade --update && apk --no-cache add \
    gcc g++ make git autoconf tzdata openntpd libcurl curl-dev coreutils \
    freetype-dev libxpm-dev libjpeg-turbo-dev libvpx-dev \
    libpng-dev ca-certificates openssl openssl-dev libxml2-dev postgresql-dev icu-dev \
    libsodium-dev libzip-dev php-pgsql

RUN docker-php-ext-install -j$(nproc) \
    pdo_pgsql \
    xmlrpc \
    intl \
    pcntl \
    sodium

# Install composer
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

# Cleanup
RUN rm -rf /var/cache/apk/* \
    && find / -type f -iname \*.apk-new -delete \
    && rm -rf /var/cache/apk/*

ADD php.ini /usr/local/etc/php/php.ini

EXPOSE 9000

CMD ["php-fpm"]