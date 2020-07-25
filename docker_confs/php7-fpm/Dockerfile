FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
		wget \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        --no-install-recommends git libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) iconv mysqli pdo_mysql \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer

# Install xdebug
RUN echo "memory_limit = -1" >> /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /code

ENV user andrey

RUN useradd -m -d /home/${user} ${user} \
 && chown -R ${user} /home/${user}

USER ${user}
# Запускаем контейнер
# Из документации: The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable,
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD ["php-fpm"]

ENV TERM xterm-256color