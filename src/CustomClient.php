<?php
    /**
     * Created by PhpStorm.
     * User: shipilovaleksei
     * Date: 09/02/2019
     * Time: 07:16
     */

namespace Php\Package;

use GuzzleHttp\Client;

class CustomClient extends Client
{
    public function getData($url)
    {
        return (string) $this->get($url)->getBody();
    }
}