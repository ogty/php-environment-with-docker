# PHP Environment with Docker

```zsh
$ git clone https://github.com/ogty/php-environment-with-docker.git
$ cd php-environment-with-docker
$ docker-compose up
$ docker cp local_web:/etc/apache2/sites-available/ ./apache/sites-available/ # Effective with a new tab open
$ # Type Ctrl + C 2 or 3 times
$ docker container prune -f
```

**docker-compose.yml**

```diff
    volumes:
      - ./src:/var/www/html
+     - ./apache/sites-available:/etc/apache2/sites-available
```

```zsh
$ docker-compose up
```
