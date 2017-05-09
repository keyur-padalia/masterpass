<?php

use Dnetix\MasterPass\MasterCardApiConfig;

class BaseTestCase extends PHPUnit_Framework_TestCase
{

    function client($params = [])
    {
        $privateKey = getenv('MP_PRIVATE_KEY');
        $privateKey = base64_decode(substr($privateKey, 7));

        MasterCardApiConfig::setConsumerKey(getenv('MP_CONSUMER_KEY'));
        MasterCardApiConfig::setPrivateKey($privateKey);
        MasterCardApiConfig::setSandBox(getenv('MP_TEST'));

        return new \Dnetix\MasterPass\MasterPassApi();
    }

}