# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Define o diretório padrão do Apache
WORKDIR /var/www/html

# Copia os arquivos do projeto para dentro do container
COPY ./src /var/www/html

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite

# Expõe a porta 80 para acesso ao servidor
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]