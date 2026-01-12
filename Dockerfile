FROM php:8.3-cli

RUN apt-get update \
    && apt-get install -y --no-install-recommends libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*


 #  - FROM php:8.3-cli
 #    Usa a imagem oficial do PHP 8.3 (CLI).

 #  - RUN apt-get update \
 #    Atualiza a lista de pacotes do Debian dentro do container.

 #  - && apt-get install -y --no-install-recommends libpq-dev \
 #    Instala a biblioteca de desenvolvimento do Postgres (libpq-dev), necessária para compilar o driver pdo_pgsql.
 #
 #  - && docker-php-ext-install pdo pdo_pgsql \
 #    Compila e habilita as extensões pdo e pdo_pgsql no PHP do container.
 #
 #  - && rm -rf /var/lib/apt/lists/*
 #    Limpa cache do apt para deixar a imagem menor.