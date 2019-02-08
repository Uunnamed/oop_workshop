<?php

namespace Php\Package\Tests;

use \PHPUnit\Framework\TestCase;
use \Php\Package\IPInfo;

class IPInfoTest extends TestCase
{
    public function testGetCity()
    {
        $ip = '95.215.110.180';
        $city = 'Moscow';
        $ipInfo = new IPInfo($ip);
        $this->assertEquals($city, $ipInfo->getCity());
    }
}
