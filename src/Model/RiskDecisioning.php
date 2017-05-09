<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set checkout details during DSRP.
 */
class RiskDecisioning
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Wallet' => 'Wallet',
        'ExtensionPoint' => 'ExtensionPoint',
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
        'wallet' => 'setWallet',
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
        'wallet' => 'getWallet',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $wallet the Wallet information.
     * @var Wallet
     */
    public $Wallet;

    /**
     * $extension_point the ExtensionPoint for future enhancement.
     * @var ExtensionPoint
     */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Wallet = isset($data["Wallet"]) ? $data["Wallet"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets wallet
     * @return Wallet
     */
    public function getWallet()
    {
        return $this->Wallet;
    }

    /**
     * Sets wallet
     * @param Wallet $wallet the Wallet information.
     * @return $this
     */
    public function setWallet($wallet)
    {

        $this->Wallet = $wallet;
        return $this;
    }

    /**
     * Gets extension_point
     * @return ExtensionPoint
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param ExtensionPoint $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {
        $this->ExtensionPoint = $extension_point;
        return $this;
    }

}

