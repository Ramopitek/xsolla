FROM php:7.2-fpm

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
zlib1g-dev

RUN docker-php-ext-install bcmath
RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mv composer /usr/local/bin/composer

WORKDIR /usr/src/app

COPY apps/calculator.xsolla /usr/src/app

RUN composer install

RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin
