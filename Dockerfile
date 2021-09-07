FROM php:8-apache

# Set working directory
RUN mkdir /var/www/html -p
WORKDIR /var/www/

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libonig-dev \
    nano \
    git \
    curl




# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip

# Copy existing application directory permissions
RUN chown www-data:www-data /var/www/html/ -R

WORKDIR /var/www/html
# Change current user to www | for debug comment this
# does not work yet due to permission issues
USER www-data  

#Start app // disable app exit.
CMD ["apachectl", "-D", "FOREGROUND"]
