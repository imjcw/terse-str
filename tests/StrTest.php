<?php

namespace Terse\Tests;

use PHPUnit\Framework\TestCase;
use Terse\Str;

class StrTest extends TestCase
{
    public function testCamelize()
    {
        $this->assertEquals("TerseStr", Str::camelize('terse-str', '-'), "camelize failed");
    }
    
    public function testUnCamelize()
    {
        $this->assertEquals("terse-str", Str::uncamelize('TerseStr', '-'), "uncamelize failed");
    }
}
