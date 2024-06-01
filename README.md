# VulnUp

PHP Website to learn about Blind XSS.
Made on Ubuntu 22.04.

## Installation

``` bash
git clone <url>

cd VulnUp
```

### Docker
To install Docker on Ubuntu : https://docs.docker.com/engine/install/ubuntu/

``` bash
docker build -f Dockerfile -t vulnup:0.1 .

docker run --name vulnup -p 8080:8080 -d vulnup:0.1
```

### Manual

``` bash
- Install prerequisites : sudo apt install php sqlite3 php-sqlite3 tzdata

- Run the server on port 8080 : php -S localhost:8000

- Generate account in CLI : php INIT/refresh.php
```

## The Application
![main page](/images-readme/main-page.PNG)