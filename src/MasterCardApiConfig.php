<?php

/**
 * Set required configuration for SDK.
 * @package  MasterCardCoreSDK
 */
class MasterCardApiConfig
{
    public static $consumerKey;
    public static $privateKey;
    public static $sandbox = true;
    public static $additionalProperties = [];
    public static $sandboxBuilder;
    public static $productionBuilder;
    const PRODUCTION = "PRODUCTION";
    const SANDBOX = "SANDBOX";

    const SANDBOX_URL = "https://sandbox.api.mastercard.com";
    const PROD_URL = "https://api.mastercard.com";
    public static $configs = [];
    public static $builders = [];


    /**
     * setting Private key
     *
     *
     * @param privateKey
     */
    public static function setPrivateKey($privateKey)
    {
        MasterCardApiConfig::$privateKey = $privateKey;
    }

    /**
     * getting client id
     *
     *
     * @return
     */
    public static function getConsumerKey()
    {
        return MasterCardApiConfig::$consumerKey;
    }

    /**
     * setting clientID
     *
     *
     * @param clientId
     */
    public static function setConsumerKey($consumerKey)
    {
        MasterCardApiConfig::$consumerKey = $consumerKey;
    }

    /**
     * checking SendBox Checked or Not
     *
     * @return
     */

    public static function isSandBox()
    {
        return MasterCardApiConfig::$sandbox;
    }

    public static function hostUrl()
    {
        if (MasterCardApiConfig::$sandbox) {
            return MasterCardApiConfig::SANDBOX_URL;
        } else {
            return MasterCardApiConfig::PROD_URL;
        }
    }


    /**
     * setting SendBox status
     *
     *
     * @param sandbox
     */
    public static function setSandBox($sandbox)
    {
        MasterCardApiConfig::$sandbox = $sandbox;
    }

    /**
     * Get Additional Properties
     *
     * @return
     */

    public function getAdditionalProperties()
    {
        return MasterCardApiConfig::$additionalProperties;
    }

    /**
     * Set AdditionalProperties
     *
     * @param additionalProperties
     */

    public function setAdditionalProperties($dataArray)
    {
        MasterCardApiConfig::$additionalProperties = $dataArray;
    }

    public static function validateConfig($config)
    {
        if (empty($config->privateKey)) {
            throw new SDKValidationException(SDKValidationException::ERR_MSG_PRIVATE_KEY);
        }

        if (empty($config->consumerKey)) {
            throw new SDKValidationException(SDKValidationException::ERR_MSG_CONSUMER_ID);
        }
    }


// ==============  Multiconfig Changes ======================


    /**
     * Register the apiConfig object.
     *
     * @param apiconfig    the apiConfig object.
     */
    public static function registerConfig(ApiConfig $apiConfig)
    {

        $envNm = $apiConfig->getEnvName();
        MasterCardApiConfig::$configs[$envNm] = $apiConfig;

    }


    /**
     * Returns the ApiConfig object for Sandbox/Production, based on user choice.
     * @return        the ApiConfig object.
     */
    public static function getConfig($name = null)
    {
        if (!empty($name)) {
            $apiConfig = MasterCardApiConfig::$configs[$name];
            return $apiConfig;
        } else {
            if (MasterCardApiConfig::$sandbox) {
                MasterCardApiConfig::$sandboxBuilder->privateKey = MasterCardApiConfig::$privateKey;
                MasterCardApiConfig::$sandboxBuilder->consumerKey = MasterCardApiConfig::$consumerKey;
                return MasterCardApiConfig::$sandboxBuilder->build();
            } else {
                MasterCardApiConfig::$productionBuilder->setPrivateKey(MasterCardApiConfig::$privateKey);
                MasterCardApiConfig::$productionBuilder->setConsumerKey(MasterCardApiConfig::$consumerKey);
                return MasterCardApiConfig::$productionBuilder->build();
            }
        }
    }
}

MasterCardApiConfig::$productionBuilder = new ApiConfigBuilder();
MasterCardApiConfig::$productionBuilder->setEnvName(MasterCardApiConfig::PRODUCTION);
MasterCardApiConfig::$productionBuilder->setHostUrl(MasterCardApiConfig::PROD_URL);

MasterCardApiConfig::$sandboxBuilder = new ApiConfigBuilder();
MasterCardApiConfig::$sandboxBuilder->envName = MasterCardApiConfig::SANDBOX;
MasterCardApiConfig::$sandboxBuilder->hostUrl = MasterCardApiConfig::SANDBOX_URL;

MasterCardApiConfig::$builders = [
    MasterCardApiConfig::SANDBOX => MasterCardApiConfig::$sandboxBuilder,
    MasterCardApiConfig::PRODUCTION => MasterCardApiConfig::$productionBuilder,
];


?>