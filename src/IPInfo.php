<?php

namespace Php\Package;

class IPInfo
{
    const URL = 'http://ip-api.com/json/';

    private $ip;
    private $data;

    public function __construct(string $ip)
    {
        $this->ip = $ip;
        $this->data = $this->setData($ip);
    }

    public function setData(string $ip)
    {
        return json_decode(file_get_contents(self::URL . $ip));
    }

    public function getIp()
    {
        return $this->ip;
    }
    public function getData() :\stdClass
    {
        return $this->data;
    }

    public function getCity() :string
    {
        return $this->data->city;
    }
}


