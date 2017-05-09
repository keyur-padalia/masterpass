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
    /**
     * @var ApiConfigBuilder
     */
    public static $sandboxBuilder;
    /**
     * @var ApiConfigBuilder
     */
    public static $productionBuilder;

    const PRODUCTION = "PRODUCTION";
    const SANDBOX = "SANDBOX";

    const SANDBOX_URL = "https://sandbox.api.mastercard.com";
    const PROD_URL = "https://api.mastercard.com";

    const BUTTON_SRC_URL = 'https://static.masterpass.com/dyn/img/btn/global/mp_chk_btn_290x068px.svg';

    const SCRIPT_SANDBOX_URL = 'https://sandbox.static.masterpass.com/dyn/js/switch/integration/MasterPass.client.js';
    const SCRIPT_PRODUCTION_URL = 'https://static.masterpass.com/dyn/js/switch/integration/MasterPass.client.js';

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

    public static function buttonUrl()
    {
        return self::BUTTON_SRC_URL;
    }

    public static function scriptUrl()
    {
        if (self::isSandBox())
            return self::SCRIPT_SANDBOX_URL;

        return self::SCRIPT_PRODUCTION_URL;
    }

    /**
     * Register the apiConfig object.
     * @param ApiConfig $apiConfig
     */
    public static function registerConfig(ApiConfig $apiConfig)
    {
        $envNm = $apiConfig->getEnvName();
        self::$configs[$envNm] = $apiConfig;
    }

    /**
     * Returns the ApiConfig object for Sandbox/Production, based on user choice.
     * @param null $name
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

    public static function init()
    {
        self::$productionBuilder = new ApiConfigBuilder();
        self::$productionBuilder->setEnvName(self::PRODUCTION);
        self::$productionBuilder->setHostUrl(self::PROD_URL);

        self::$sandboxBuilder = new ApiConfigBuilder();
        self::$sandboxBuilder->setEnvName(self::SANDBOX);
        self::$sandboxBuilder->setHostUrl(self::SANDBOX_URL);

        self::$builders = [
            self::SANDBOX => self::$sandboxBuilder,
            self::PRODUCTION => self::$productionBuilder,
        ];
    }
}

MasterCardApiConfig::init();

