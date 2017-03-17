# php-cli-color
Simple and easy to use the PHP command-line output of color


## Installation

composer require lijinma/php-cli-color '~1.0'

## How to use
```php
<?php

require_once __DIR__ . './../vendor/autoload.php';

$colors = new Wujunze\Colors();
// Test some basic printing with Colors class
echo $colors->getColoredString("Testing Colors class, this is purple string on yellow background.", "purple", "yellow") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is blue string on light gray background.", "blue", "light_gray") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is red string on black background.", "red", "black") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is cyan string on green background.", "cyan", "green") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is cyan string on default background.", "cyan") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is default string on cyan background.", null, "cyan") . PHP_EOL;
```

## run result

![code run result](https://camo.githubusercontent.com/5509dd50a0f9fb194a6bc2a36153934e3d74e1d9/687474703a2f2f7777342e73696e61696d672e636e2f6c617267652f303036306c6d3754677931666470747672373062646a33306e6c3037327a6c642e6a7067)