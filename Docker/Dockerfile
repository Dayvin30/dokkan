# Utilise une image officielle PHP avec Apache
FROM php:8.2-apache

# Copie ton code dans le dossier web d’Apache
COPY . /var/www/html/

# Donne les droits appropriés (optionnel)
RUN chown -R www-data:www-data /var/www/html

# Active les modules Apache si nécessaire
RUN docker-php-ext-install mysqli

# Expose le port 80 (Apache)
EXPOSE 80
