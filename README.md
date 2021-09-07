
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

# Purpose
- Easy spawn of LAMP with Marktwerking
- No 'installation' on host device
- Instant edit of LAMP files
- Standardize environment


# Installation 

## Dependencies
- https://github.com/vslcatena/marktwerking or any other LAMP stack app in ./html
- Time... 

## Steps

1. ```git clone https://github.com/vslcatena/docker-marktwerking``` 

2. Fill in your variables in docker-compose

3. Check configuration in docker-compose 

4. ```docker-compose up --build``` 

5. Wait some minutes , grab some coffee

6. Access your server files on ./html/ (instant-edit using bind mount)

7. Visit website on http://{docker-host}:4080

