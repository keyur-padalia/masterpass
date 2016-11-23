<?php

namespace Dnetix\MasterPass;

use Dnetix\MasterPass\Exception\SDKValidationException;

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

    /**
     * @var ApiConfigBuilder
     */
    public static $productionBuilder;
    const PRODUCTION = "PRODUCTION";
    const SANDBOX = "SANDBOX";

    const SANDBOX_URL = "https://sandbox.api.mastercard.com";
    const PROD_URL = "https://api.mastercard.com";

    public static $configs = [];
    public static $builders = [];

    public static function setPrivateKey($privateKey)
    {
        self::$privateKey = $privateKey;
    }

    public static function getConsumerKey()
    {
        return self::$consumerKey;
    }

    public static function setConsumerKey($consumerKey)
    {
        self::$consumerKey = $consumerKey;
    }

    /**
     * checking SendBox Checked or Not
     */
    public static function isSandBox()
    {
        return self::$sandbox;
    }

    public static function hostUrl()
    {
        if (self::$sandbox) {
            return self::SANDBOX_URL;
        } else {
            return self::PROD_URL;
        }
    }

    /**
     * Setting SendBox status
     * @param sandbox
     */
    public static function setSandBox($sandbox)
    {
        self::$sandbox = $sandbox;
    }

    /**
     * Get Additional Properties
     */
    public function getAdditionalProperties()
    {
        return self::$additionalProperties;
    }

    /**
     * Set AdditionalProperties
     * @param additionalProperties
     */
    public function setAdditionalProperties($dataArray)
    {
        self::$additionalProperties = $dataArray;
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

    /**
     * Register the apiConfig object.
     */
    public static function registerConfig(ApiConfig $apiConfig)
    {
        $envNm = $apiConfig->getEnvName();
        self::$configs[$envNm] = $apiConfig;
    }

    /**
     * Returns the ApiConfig object for Sandbox/Production, based on user choice.
     * @return ApiConfig
     */
    public static function getConfig($name = null)
    {
        if (!empty($name)) {
            $apiConfig = self::$configs[$name];
            return $apiConfig;
        } else {
            if (self::$sandbox) {
                self::$sandboxBuilder->privateKey = self::$privateKey;
                self::$sandboxBuilder->consumerKey = self::$consumerKey;
                return self::$sandboxBuilder->build();
            } else {
                self::$productionBuilder->setPrivateKey(self::$privateKey);
                self::$productionBuilder->setConsumerKey(self::$consumerKey);
                return self::$productionBuilder->build();
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
