FROM php:7.3-apache

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
      git=1:2.11* \
    && rm -rf /var/lib/apt/lists/*

#Note, with the following, you need to do configure->install->configure->install
# You can't just configure->configure->install->install - the world will end horribly
RUN ocker-php-ext-install mbstring && \
    docker-php-ext-install mysqli

COPY * /var/www/html/




