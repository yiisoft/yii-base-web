<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
    <h1 align="center">Yii Framework Application</h1>
    <br>
</p>

This package is one of the three [Yii Framework] [application bases](https://github.com/yiisoft/docs/blob/master/000-packages.md#yii-project-template-and-application-bases) provided for rapidly creating projects.

> This template is still **experimental** and provided to help you discover Yii 3.
> If you are looking to develop with the last stable Yii version, use [yii2-app-basic](https://github.com/yiisoft/yii2-app-basic) instead

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[Yii Framework]: http://www.yiiframework.com/

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii-base-web.svg)](https://packagist.org/packages/yiisoft/yii-base-web)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii-base-web.svg)](https://packagist.org/packages/yiisoft/yii-base-web)
[![Build Status](https://travis-ci.com/yiisoft/yii-base-web.svg?branch=master)](https://travis-ci.com/yiisoft/yii-base-web)

DIRECTORY STRUCTURE
-------------------

```
bin/
config/             contains application configurations
public/             contains the entry script for a web server
runtime/            contains files generated during runtime
src/
  assets/             contains assets definition
  commands/           contains console commands (controllers)
  controllers/        contains Web controller classes
  mail/               contains view files for e-mails
  messages/           contains translations files
  models/             contains model classes
  views/              contains view files for the Web application
  widgets/            contains Widgets
vendor/             contains dependent 3rd-party packages
.env
.env.dist
composer.json
```

REQUIREMENTS
------------
 
The minimum requirement by this project template that your Web server supports PHP 7.2.


INSTALLATION
------------

Follow the installation of [yii-project-template](https://github.com/yiisoft/yii-project-template#installation) 
to get started with this template.


CONFIGURATION
-------------

You should recreate configuration files as needed in your root `config/` directory.

Make sure they are listed in the `extra.config-plugin` entry of your `composer.json` file in order for them
to be discovered, and remember to run `composer dump-autoload` (or `composer du`) every time you change a 
configuration value.

Refer to [hiqdev/composer-config-plugin](https://github.com/hiqdev/composer-config-plugin#refreshing-config) for more information.


**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
