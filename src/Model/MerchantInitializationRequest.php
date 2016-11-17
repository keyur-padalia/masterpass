<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains various methods for to set different merchant initialization request parameters required for Merchant Initialization Service.
 */
class MerchantInitializationRequest
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'OAuthToken' => 'OAuthToken',
        'PreCheckoutTransactionId' => 'PreCheckoutTransactionId',
        'OriginUrl' => 'OriginUrl',
        'ExtensionPoint' => 'MerchantInitializationExtension',
    ];

    static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    static $setters = [
        'o_auth_token' => 'setOAuthToken',
        'pre_checkout_transaction_id' => 'setPreCheckoutTransactionId',
        'origin_url' => 'setOriginUrl',
        'extension_point' => 'setExtensionPoint',
    ];

    static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    static $getters = [
        'o_auth_token' => 'getOAuthToken',
        'pre_checkout_transaction_id' => 'getPreCheckoutTransactionId',
        'origin_url' => 'getOriginUrl',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $o_auth_token the Request Token (oauth_token) returned by call to the request_token API.
     * @var string
     */
    public $OAuthToken;

    /**
     * $pre_checkout_transaction_id the precheckout transaction identifier. Returned from get precheckout data call.
     * @var string
     */
    public $PreCheckoutTransactionId;

    /**
     * $origin_url the URL of the page that will initialize the Lightbox.
     * @var string
     */
    public $OriginUrl;

    /**
     * $extension_point the MerchantInitializationExtension for DSRP/future enhancement.
     * @var MerchantInitializationExtension
     */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->OAuthToken = isset($data["OAuthToken"]) ? $data["OAuthToken"] : "";
            $this->PreCheckoutTransactionId = isset($data["PreCheckoutTransactionId"]) ? $data["PreCheckoutTransactionId"] : "";
            $this->OriginUrl = isset($data["OriginUrl"]) ? $data["OriginUrl"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets o_auth_token
     * @return string
     */
    public function getOAuthToken()
    {
        return $this->OAuthToken;
    }

    /**
     * Sets o_auth_token
     * @param string $o_auth_token the Request Token (oauth_token) returned by call to the request_token API.
     * @return $this
     */
    public function setOAuthToken($o_auth_token)
    {

        $this->OAuthToken = $o_auth_token;
        return $this;
    }

    /**
     * Gets pre_checkout_transaction_id
     * @return string
     */
    public function getPreCheckoutTransactionId()
    {
        return $this->PreCheckoutTransactionId;
    }

    /**
     * Sets pre_checkout_transaction_id
     * @param string $pre_checkout_transaction_id the precheckout transaction identifier. Returned from get precheckout data call.
     * @return $this
     */
    public function setPreCheckoutTransactionId($pre_checkout_transaction_id)
    {
        $this->PreCheckoutTransactionId = $pre_checkout_transaction_id;
        return $this;
    }

    /**
     * Gets origin_url
     * @return string
     */
    public function getOriginUrl()
    {
        return $this->OriginUrl;
    }

    /**
     * Sets origin_url
     * @param string $origin_url the URL of the page that will initialize the Lightbox.
     * @return $this
     */
    public function setOriginUrl($origin_url)
    {
        $this->OriginUrl = $origin_url;
        return $this;
    }

    /**
     * Gets extension_point
     * @return MerchantInitializationExtension
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param MerchantInitializationExtension $extension_point the MerchantInitializationExtension for DSRP/future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {
        $this->ExtensionPoint = $extension_point;
        return $this;
    }

}

