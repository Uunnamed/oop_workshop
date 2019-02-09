<?php

namespace Php\Package;

class IPInfo
{
    private $ip;
    private $city;
    //...etc
    public function __construct($ipData)
    {
        $this->ip = $ipData->ip;
        $this->city = $ipData->city;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function __toString()
    {
        return "{$this->ip}: {$this->city}";
    }
}

