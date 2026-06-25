FROM php:8.4-fpm-alpine AS base

ARG UID=1000
ARG GID=1000

WORKDIR /app

RUN apk add --no-cache \
    bash \
    git \
    unzip \
    curl \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    linux-headers \
    && docker-php-ext-install \
    intl \
    mbstring \
    zip \
    pdo \
    pdo_mysql \
    opcache

RUN addgroup -g ${GID} app \
    && adduser -D -u ${UID} -G app app

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY entrypoint.sh /usr/local/bin/app-entrypoint

RUN chmod +x /usr/local/bin/app-entrypoint

ENTRYPOINT ["app-entrypoint"]
CMD ["php-fpm"]

FROM base AS dev

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

USER app

FROM base AS prod

USER app