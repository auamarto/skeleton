## Web Services
````
App http://localhost/api
Mailcatcher http://localhost:8080
````
## Overview
* web (Nginx)
* php (PHP 7.2 with PHP-FPM)
* db (PostgreSQL 10.1)
* composer

### Configuring PHP

To change PHP's configuration edit `.docker/conf/php/php.ini`.
Same goes for `.docker/conf/php/xdebug.ini`.

You can add any .ini file in this directory, don't forget to map them by adding a new line in the php's `volume` section of the `docker-compose.yml` file.

### Configuring PostgreSQL
Any .sh or .sql file you add in `./.docker/conf/postgres` will be automatically loaded at boot time.


## Create alias for php interpreter
windows
````
doskey php=docker exec -ti php php $*
doskey composer=docker exec -ti php composer $*
````
linux
````
alias php="docker exec -ti php php $*" >> ~/.bash_aliases
alias composer="composer=docker exec -ti php composer $*" >> ~/.bash_aliases
````