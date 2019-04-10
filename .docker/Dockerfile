FROM php:7.3-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
      git=1:2.11* \
    && rm -rf /var/lib/apt/lists/*

#Note, with the following, you need to do configure->install->configure->install
# You can't just configure->configure->install->install - the world will end horribly
RUN docker-php-ext-install mbstring && \
    docker-php-ext-install mysqli

COPY * /var/www/html/

ENV OSMA_DB_CONFIG /var/www/html/database.php

RUN sed -i -e "s/'172.30.132.205'/getenv('OSMA_DB_HOST')/g" ${OSMA_DB_CONFIG} && \
    sed -i -e "s/'adminzvJZccK'/getenv('OSMA_DB_USER')/g" ${OSMA_DB_CONFIG} && \
    sed -i -e "s/'5Et6HuymAm_j'/getenv('OSMA_DB_PASS')/g" ${OSMA_DB_CONFIG} && \
    sed -i -e "s/'spider'/getenv('OSMA_DB_NAME')/g"  ${OSMA_DB_CONFIG}



