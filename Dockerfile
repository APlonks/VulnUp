FROM ubuntu:22.04

WORKDIR /opt/

COPY . /opt/

# Install PHP, SQLite3, and PHP for SQLite
RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y php sqlite3 php-sqlite3 tzdata

RUN chmod 777 INIT

# Execute refresh.php to initialize the database
RUN php INIT/refresh.php

EXPOSE 8080

ENTRYPOINT [ "php", "-S", "0.0.0.0:8080" ]


