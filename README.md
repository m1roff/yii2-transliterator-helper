TransliteratorHelper for Yii 2
==============================

Extended from https://github.com/2amigos/yii2-transliterator-helper

TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII. 

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "mirkhamidov/yii2-transliterator-helper": "*"
```
or add

```json
"mirkhamidov/yii2-transliterator-helper": "*"
```

to the require section of your application's `composer.json` file.

Usage
-----
Pass to the method `process()` the UTF-8 encoded string you wish to transliterate:

```
use mirkhamidov\transliterator\TransliteratorHelper;

// will echo AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy
TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));
```
