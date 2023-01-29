FROM php:8.0.1-fpm-alpine

RUN apk update

RUN docker-php-ext-install pdo pdo_mysql opcache

# Setup GD extension
RUN apk add  \
  freetype \
  libjpeg-turbo \
  libpng \
  freetype-dev \
  libjpeg-turbo-dev \
  libpng-dev \
  && docker-php-ext-configure gd \
  --with-freetype=/usr/include/ \
  # --with-png=/usr/include/ \ # No longer necessary as of 7.4; https://github.com/docker-library/php/pull/910#issuecomment-559383597
  --with-jpeg=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-enable gd \
  && apk del  \
  freetype-dev \
  libjpeg-turbo-dev \
  libpng-dev \
  && rm -rf /tmp/*


RUN apk add \
        libzip-dev \
        zip \
  && docker-php-ext-install zip  

# COPY ./php/conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini