# Yii2 Language

**Yii2 module for language switching**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/yii2-language/v/stable)](https://packagist.org/packages/hiqdev/yii2-language)
[![Total Downloads](https://poser.pugx.org/hiqdev/yii2-language/downloads)](https://packagist.org/packages/hiqdev/yii2-language)
[![Build Status](https://img.shields.io/travis/hiqdev/yii2-language.svg)](https://travis-ci.org/hiqdev/yii2-language)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/yii2-language.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-language/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/yii2-language.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-language/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:yii2-language/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:yii2-language/dev-master)

This [Yii2] extension provides language switching module.

This extension provides:

- module with controller and language select action
    - auto detection of acceptable languages
    - saving selected language to cookie
- widget for displaying language selection menu

[yii2]: http://yiiframework.com/

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/yii2-language"
```

or add

```json
"hiqdev/yii2-language": "*"
```

to the require section of your composer.json.

## Usage

Example application configuration:
 
```php
    'modules' => [
        'language' => [
            'class' => \hiqdev\yii2\merchant\Module::class,
            'languages' => [
                'en' => 'English',
                'ru' => 'Русский',
            ],
        ],
    ],
```

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
