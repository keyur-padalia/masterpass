<?php

namespace Dnetix\MasterPass;

/**
 * Set environment details require to call mastercard api.
 * @package  MasterCardCoreSDK
 *
 */
class ApiConfig
{

    public $hostUrl;
    public $consumerKey;
    public $privateKey;
    public $envName;

    /**
     * Constructs ApiConfig object.
     *
     * @param hostUrl            the environment host url. eg : "https://sandbox.api.mastercard.com"
     * @param consumerKey        the consumer key (Generated from mastercrad developer zone).
     * @param privateKey        the private key, to be fetched from the certificate.
     */
    public function __construct($envName, $hostUrl, $consumerKey, $privateKey)
    {
        $this->envName = $envName;
        $this->hostUrl = $hostUrl;
        $this->consumerKey = $consumerKey;
        $this->privateKey = $privateKey;
    }

    /**
     * Set the environment name.
     *
     * @param name        the environment name. e.g - SANDBOX
     */
    public function setEnvName($envName)
    {
        $this->envName = $envName;
    }

    /**
     * Get the environment name.
     *
     * @return the environment name.
     */
    public function getEnvName()
    {
        return $this->envName;
    }

    /**
     * Set the environment host url.
     *
     * @param hostUrl    the environment host url. e.g. sandbox - "https://sandbox.api.mastercard.com"
     */
    public function setHostUrl($hostUrl)
    {
        $this->hostUrl = $hostUrl;
    }

    /**
     * Get the environment host url.
     *
     * @return the environment host url.
     */
    public function getHostUrl()
    {
        return $this->hostUrl;
    }

    /**
     * Set the consumer key generated from mastercrad developer zone.
     *
     * @param consumerKey    the consumer key (Generated from mastercrad developer zone).
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    /**
     * Get the consumer key.
     *
     * @return the consumer key.
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Set the Private key
     * @param privateKey     the private key, to be fetched from the certificate.
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * Get the private key.
     *
     * @return the private key.
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

}

?>