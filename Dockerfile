FROM wordpress:latest

# Copia o tema para a pasta correta dentro do container
COPY . /var/www/html/wp-content/themes/meu-tema-customizado/

# Define as permissões corretas
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/meu-tema-customizado/
