<?php

use lyhiving\Mobile\Mobile2Location;

/**
* Phone Test
*/
class PhoneTest extends PHPUnit_Framework_TestCase
{
    protected $phone = null;

    public function setUp()
    {
        $this->phone = new Mobile2Location();
    }

    public function testFileHandle()
    {
        $this->assertAttributeNotEquals(null, '_fileHandle', $this->phone);
    }

    public function testPhoneInfo()
    {
        $info = function () {
            return $this->phone->phoneInfo('北京|北京|100000|010', 1);
        };
        $this->assertNotEmpty($info);
    }

    public function testPhoneFind()
    {
        $info = $this->phone->find(13800138000);
        $this->assertNotEmpty($info);
    }
}
