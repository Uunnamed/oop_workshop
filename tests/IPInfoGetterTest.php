<?php

namespace Php\Package\Tests;

use \PHPUnit\Framework\TestCase;
use \Php\Package\IPInfoGetter;

class IPInfoGetterTest extends TestCase
{
    public function testGetCityMoscow()
    {
        $ip = '95.215.110.180';
        $city = 'Moscow';
        $ipInfo = IPInfoGetter::getIpInfo($ip);
        $this->assertEquals($city, $ipInfo->getCity());
    }

    public function testGetCityByWrongIP()
    {
        $ip = '95.215.';
        $city = '';
        $ipInfo = IPInfoGetter::getIpInfo($ip);
        $this->assertEquals($city, $ipInfo->getCity());
    }
}
