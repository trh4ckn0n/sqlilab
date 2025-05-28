# Utilise une image officielle PHP avec Apache
FROM php:8.1-apache

# Active les extensions nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie le code source dans le conteneur
COPY public/ /var/www/html/
COPY db.php /var/www/html/
#COPY .env /var/www/html/
COPY setup.sql /docker-entrypoint-initdb.d/

# Autorise .htaccess et mod_rewrite
RUN a2enmod rewrite
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80
EXPOSE 80
