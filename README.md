*Docker container for LAMP apps

APP_NAME = marktwerking

APP_REPO = https://github.com/vslcatena/marktwerking.git

# Contents

- [Changelog](#changelog)
- [Purpose](#purpose)
- [Installation](#installation)
  - [Dependencies](#dependencies)
  - [Steps](#steps)
- [Dir & Files](#dir--files)
  - [Before initialize](#before-initialize)
  - [After initialization](#after-initialization)
- [Advanced](#advanced)
  - [Alternative use for this repo](#alternative-use-for-this-repo)
  - [Git commit / push in Laravel App](#git-commit--push-in-laravel-app)
- [Troubleshoot](#troubleshoot)

# Changelog
- Initial commit
  - clone of docker-laravel

# Purpose
- Easy spawn of LAMP
- No 'installation' on host device
- Instant edit of LAMP files
- Standardize environment


# Installation 

## Dependencies
- https://github.com/vslcatena/marktwerking or any other LAMP stack app

- Time... 

## Steps

1. ```git clone https://github.com/vslcatena/docker-web``` 

2. Get .env.example from your repo and fill in your variables

3. Check configuration in docker-compose 

4. ```screen -R APP_NAME```

5. ```docker-compose up --build``` 
6. Wait 25 minutes , grab some coffee
7. Access your server files on ./html/ (instant-edit using bind mount)
8. Visit website on http://{docker-host}:1234


# Dir & Files
## Before initialize
- Dockerfile
- docker-compose.yml
- README.md

## After initialization
- above mentioned files
- ./etc
  -  config of php
  -  config of mysql
  -  config of apache2
- .env
  - configuration of application

# Troubleshoot
- App wont start.
  - Check error in build and report back with issue


- How to start over?
  - Remove ./html
  - Remove ./etc
  - Remove all older images and containers
