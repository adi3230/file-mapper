FROM php:7.4-apache
COPY . /var/www/html/
#install php composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 80
