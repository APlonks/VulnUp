FROM ubuntu:22.04

WORKDIR /opt/

COPY . /opt/

RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y php sqlite3 tzdata

EXPOSE 8080

# ENTRYPOINT [ "sleep", "infinity" ]

ENTRYPOINT [ "php", "-S", "0.0.0.0:8080" ]

# CMD [ "php", "/opt/INIT/refresh.php" ]
