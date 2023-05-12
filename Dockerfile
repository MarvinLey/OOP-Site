FROM php:latest
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_mysql
COPY . /Webanwendung
WORKDIR /Webanwendung
EXPOSE 3000
CMD [ "php", "-S", "0.0.0.0:3000", "-t", "." ]
