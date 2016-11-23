<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains token request information.
 */
class Tokenization
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'FPanSuffix' => 'FPanSuffix',
        'TokenRequestorId' => 'TokenRequestorId',
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
        'f_pan_suffix' => 'setFPanSuffix',
        'token_requestor_id' => 'setTokenRequestorId',
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
        'f_pan_suffix' => 'getFPanSuffix',
        'token_requestor_id' => 'getTokenRequestorId',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $f_pan_suffix the pan suffix.
     * @var string
     */
    public $FPanSuffix;

    /**
     * $token_requestor_id the token request or id.
     * @var string
     */
    public $TokenRequestorId;

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
            $this->FPanSuffix = isset($data["FPanSuffix"]) ? $data["FPanSuffix"] : "";
            $this->TokenRequestorId = isset($data["TokenRequestorId"]) ? $data["TokenRequestorId"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets f_pan_suffix
     * @return string
     */
    public function getFPanSuffix()
    {
        return $this->FPanSuffix;
    }

    /**
     * Sets f_pan_suffix
     * @param string $f_pan_suffix the pan suffix.
     * @return $this
     */
    public function setFPanSuffix($f_pan_suffix)
    {

        $this->FPanSuffix = $f_pan_suffix;
        return $this;
    }

    /**
     * Gets token_requestor_id
     * @return string
     */
    public function getTokenRequestorId()
    {
        return $this->TokenRequestorId;
    }

    /**
     * Sets token_requestor_id
     * @param string $token_requestor_id the token request or id.
     * @return $this
     */
    public function setTokenRequestorId($token_requestor_id)
    {

        $this->TokenRequestorId = $token_requestor_id;
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

