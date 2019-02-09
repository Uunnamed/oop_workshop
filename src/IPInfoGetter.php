<?php
    /**
     * Created by PhpStorm.
     * User: shipilovaleksei
     * Date: 09/02/2019
     * Time: 07:16
     */

namespace Php\Package;

class IPInfoGetter
{
    const URL = 'http://ip-api.com/json/';

    public static function getIpInfo(string $ip)
    {
        return new IPInfo(self::getData($ip));
    }

    private static function getData(string $ip)
    {
        try {
            $ipData =  json_decode(file_get_contents(self::URL . $ip));
            $ipData->ip = $ipData->query;
            return $ipData;
        } catch (Exception $e) {
            return (object) [];
        }
    }
}
