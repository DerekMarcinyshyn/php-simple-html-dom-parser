# Laravel PHP Simple HTML DOM Parser

[![Build Status](https://travis-ci.org/DerekMarcinyshyn/php-simple-html-dom-parser.svg?branch=master)](https://travis-ci.org/DerekMarcinyshyn/php-simple-html-dom-parser)

Thin wrapper for http://simplehtmldom.sourceforge.net/ and provides the two public static functions

```php file_get_html() ``` and ```php str_get_html() ```

## Installation

Requires

- PHP 5.4+
- Laravel 4.2+

Install via Composer by adding the following line to the require block of your composer.json file

```php
"monashee/php-simple-html-dom-parser": "dev-master"
```

Then run ```php composer update ```

Add this line to the providers array in your ```php app/config/app.php ``` file:

```php
'Monashee\PhpSimpleHtmlDomParser\PhpSimpleHtmlDomParserServiceProvider',
```

## Sample Usage

You could create an alias, but I prefer the DI method.

```php

<?php

use Monashee\PhpSimpleHtmlDomParser\PhpSimpleHtmlDomParser;

class Test {

    /**
     * @var PhpSimpleHtmlDomParser
     */
    protected $parser;

    /**
     * @param PhpSimpleHtmlDomParser $parser
     */
    public function __construct(PhpSimpleHtmlDomParser $parser)
    {
        $this->parser = $parser;
    }

    public function getHtml()
    {
        $html = $this->parser->file_get_html('http://monasheemountainmultimedia.com');

        dd($html);
    }

}

```