<?php

require_once __DIR__ . './../vendor/autoload.php';

$colors = new Wujunze\Colors();
// Test some basic printing with Colors class
echo $colors->getColoredString("Testing Colors class, this is purple string on yellow background.", "purple",
        "yellow") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is blue string on light gray background.", "blue",
        "light_gray") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is red string on black background.", "red",
        "black") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is cyan string on green background.", "cyan",
        "green") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is cyan string on default background.", "cyan") . PHP_EOL;
echo $colors->getColoredString("Testing Colors class, this is default string on cyan background.", null,
        "cyan") . PHP_EOL;