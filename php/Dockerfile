FROM php:7.2-fpm
ENV TZ=Asia/Taipei
RUN apt-get update \
  && apt-get install -y \
    cron \
    openssl \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    redis \
    git
RUN pecl install redis
RUN docker-php-ext-install \
    gd \
    mbstring \
    pdo \
    pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer