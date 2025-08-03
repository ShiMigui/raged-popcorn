FROM php:8.4-fpm-alpine

WORKDIR /app

RUN apk add --no-cache curl git unzip \
	&& curl -sS https://getcomposer.org/installer | php \
	&& mv composer.phar /usr/local/bin/composer 

COPY . .

RUN composer install

EXPOSE 9000
