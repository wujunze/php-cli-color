<?php

namespace  Wujunze\Tests\Color;

use Wujunze\Colors;
use Wujunze\Tests\TestCase;

class CliColorTest extends TestCase
{
    public function createServer()
    {
        return new Colors();
    }

    public function testCliColor()
    {
        $color = $this->createServer();
        $res = $color->getColoredString("Testing Colors class, this is purple string on yellow background.",
            "purple",
            "yellow");
        $this->assertEquals('[0;35m[43mTesting Colors class, this is purple string on yellow background.[0m', $res);
    }

    public function testGetBackgroundColors()
    {
        $color = $this->createServer();
        $colors = $color->getBackgroundColors();
        $this->assertNotEmpty($colors);
    }

    public function testGetForegroundColors(){
        $color = $this->createServer();
        $colors = $color->getForegroundColors();
        $this->assertNotEmpty($colors);
    }

}