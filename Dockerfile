FROM php:8.2-apache

# Installe l'extension mysqli
RUN docker-php-ext-install mysqli