# Utilise une image officielle PHP avec Apache
FROM php:8.2-apache

# Copie tous les fichiers du projet dans le dossier web d’Apache
COPY . /var/www/html/

# Donne les droits appropriés (optionnel mais conseillé)
RUN chown -R www-data:www-data /var/www/html

# Active les extensions PHP nécessaires
RUN docker-php-ext-install mysqli

# Expose le port 80 pour le serveur web Apache
EXPOSE 80
