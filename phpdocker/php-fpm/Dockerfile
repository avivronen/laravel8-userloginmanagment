FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php-memcached php7.3-mysql php-redis php7.3-sqlite3 php-xdebug php7.3-bcmath php7.3-gd php7.3-gmp php-imagick php7.3-ldap php-mongodb php7.3-odbc \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


#WORKDIR /app
#COPY /backend/package.json ./
#copy * ./
#RUN ls -la

#CMD php artisan serve --host=0.0.0.0 --port=8000
#EXPOSE 8000

#find /application/ -type f -exec chmod 644 {} \;
  #find /application -type d -exec chmod 755 {} \;
  #chown -R 1000:1000 /application/
  #chmod -R 777 /application/storage
  #chmod -R 777 /application/bootstrap/cache/
  #chmod -R 777 /application/public/
