<?php
    /**
     * Created by PhpStorm.
     * User: shipilovaleksei
     * Date: 09/02/2019
     * Time: 07:16
     */

namespace Php\Package;

class GeoIp
{
    const PATH = 'http://ip-api.com/json/';
    public $client;
    public function __construct($client = null)
    {
        $this->client = $client ?? new CustomClient();
    }

    public function getDataForIp($ip)
    {
        $ipData = json_decode($this->client->getData(self::PATH . $ip));
        if (!self::isValidIp($ipData->query)) {
            throw new \Exception('Не валидный ip');
        }
        return new IPInfo($ipData);
    }

    public static function isValidIp($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP);
    }
}
