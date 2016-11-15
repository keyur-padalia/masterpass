<?php

namespace Dnetix\MasterPass;

/**
 * Set environment details require to call mastercard api.
 */
class ApiConfigBuilder
{

    public $hostUrl;
    public $envName;
    public $consumerKey;
    public $privateKey;
    const ERR_MISSING_DATA = "Missing Required Data ";

    public function setEnvName($envName)
    {
        $this->envName = $envName;
        return $this;
    }

    public function setHostUrl($hostUrl)
    {
        $this->hostUrl = $hostUrl;
        return $this;
    }

    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    public function build()
    {
        $config = new ApiConfig($this->envName, $this->hostUrl, $this->consumerKey, $this->privateKey);
        MasterCardApiConfig::registerConfig($config);
        return $config;
    }
}
