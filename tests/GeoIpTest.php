<?php

namespace Php\Package\Tests;

use Php\Package\GeoIp;
use \PHPUnit\Framework\TestCase;

class CustomTestClient
{
    private $path;
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function getData()
    {
        return file_get_contents($this->path);
    }
}

class GeoIpTest extends TestCase
{
    public function testGetCityMoscow()
    {
        $ip = "95.215.110.180";
        $city = 'Moscow';
        $path = __DIR__ . '/fixtures/' . $ip;
        $client = new CustomTestClient($path);
        $geoIp = new GeoIp($client);
        $ipInfo = $geoIp->getDataForIp($ip);
        $this->assertEquals($city, $ipInfo->getCity());
    }

//    public function testGetCityByWrongIP()
//    {
//        $ip = '95.215.';
//        $city = '';
//        $path = __DIR__ .  '/fixtures/' . $ip;
//        $client = new CustomTestClient($path);
//        $geoIp = new GeoIp($client);
//        $ipInfo = $geoIp->getDataForIp($ip);
//        $this->assertEquals($city, $ipInfo->getCity());
//    }
}
