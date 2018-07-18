# php-cli-color
Simple and easy to use the PHP command-line output of color



[![Build Status](https://travis-ci.org/wujunze/php-cli-color.svg?branch=master)](https://travis-ci.org/wujunze/php-cli-color)
[![codecov](https://codecov.io/gh/wujunze/php-cli-color/branch/master/graph/badge.svg)](https://codecov.io/gh/wujunze/php-cli-color)
[![Latest Stable Version](https://poser.pugx.org/wujunze/php-cli-color/v/stable)](https://packagist.org/packages/wujunze/php-cli-color) [![Total Downloads](https://poser.pugx.org/wujunze/php-cli-color/downloads)](https://packagist.org/packages/wujunze/php-cli-color) [![License](https://poser.pugx.org/wujunze/php-cli-color/license)](https://packagist.org/packages/wujunze/php-cli-color)

## Installation

`composer require wujunze/php-cli-color`

## How to use
```php
<?php

require_once __DIR__ . './../vendor/autoload.php';

$colors = new Wujunze\Colors();
// Test some basic printing with Colors class
echo $colors->getColoredString("Testing Colors class, this is purple string on yellow background.", "purple", "yellow");
echo $colors->getColoredString("Testing Colors class, this is blue string on light gray background.", "blue", "light_gray");
echo $colors->getColoredString("Testing Colors class, this is red string on black background.", "red", "black");
echo $colors->getColoredString("Testing Colors class, this is cyan string on green background.", "cyan", "green");
echo $colors->getColoredString("Testing Colors class, this is cyan string on default background.", "cyan");
echo $colors->getColoredString("Testing Colors class, this is default string on cyan background.", null, "cyan");
```

## run result

![code run result](https://camo.githubusercontent.com/5509dd50a0f9fb194a6bc2a36153934e3d74e1d9/687474703a2f2f7777342e73696e61696d672e636e2f6c617267652f303036306c6d3754677931666470747672373062646a33306e6c3037327a6c642e6a7067)
