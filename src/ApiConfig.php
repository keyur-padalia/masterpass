<?php

namespace Dnetix\MasterPass;

class ApiConfig
{
    public $hostUrl;
    public $consumerKey;
    public $privateKey;
    public $envName;

    public function __construct($envName, $hostUrl, $consumerKey, $privateKey)
    {
        $this->envName = $envName;
        $this->hostUrl = $hostUrl;
        $this->consumerKey = $consumerKey;
        $this->privateKey = $privateKey;
    }

    public function setEnvName($envName)
    {
        $this->envName = $envName;
        return $this;
    }

    public function getEnvName()
    {
        return $this->envName;
    }

    public function setHostUrl($hostUrl)
    {
        $this->hostUrl = $hostUrl;
        return $this;
    }

    public function getHostUrl()
    {
        return $this->hostUrl;
    }

    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

}
