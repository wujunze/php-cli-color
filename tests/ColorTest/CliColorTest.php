<?php

namespace Wujunze\Tests\Color;

use Wujunze\Colors;
use Wujunze\Tests\TestCase;

class CliColorTest extends TestCase
{
    public function createServer()
    {
        return new Colors();
    }

    public function testColoredString()
    {
        $color = $this->createServer();
        $res = $color->getColoredString("Testing Colors class, this is purple string on yellow background.",
            "purple",
            "yellow",
            true);
        $this->assertEquals('[0;35m[43mTesting Colors class, this is purple string on yellow background.[0m' . PHP_EOL, $res);
    }

    public function testColorString()
    {
        $color = $this->createServer();
        $res = $color->getColoredString("Testing Colors class, this is purple string on yellow background.",
            "purple",
            "yellow",
            false);
        $this->assertEquals('[0;35m[43mTesting Colors class, this is purple string on yellow background.[0m' , $res);

    }

    public function testGetBackgroundColors()
    {
        $color = $this->createServer();
        $colors = $color->getBackgroundColors();
        $this->assertNotEmpty($colors);
    }

    public function testGetForegroundColors()
    {
        $color = $this->createServer();
        $colors = $color->getForegroundColors();
        $this->assertNotEmpty($colors);
    }

    public function testInitColoredString()
    {
        $color = $this->createServer();
        $string = $color::initColoredString('hello php', 'yellow', 'black');
        $this->assertNotNull($string);
    }

    public function testWarn()
    {
        $color = $this->createServer();
        $string = $color::warn('this the warn string');
        $this->assertNull($string);
    }

    public function testError()
    {
        $color = $this->createServer();
        $string = $color::error('this the warn string');
        $this->assertNull($string);
    }

    public function testSuccess()
    {
        $color = $this->createServer();
        $string = $color::success('this the warn string');
        $this->assertNull($string);
    }

    public function testNotice()
    {
        $color = $this->createServer();
        $string = $color::notice('this the warn string');
        $this->assertNull($string);
    }
}