<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods regarding issuers information.
 */
class Issuers
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Issuer' => 'Issuer',
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
        'issuer' => 'setIssuer',
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
        'issuer' => 'getIssuer',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $issuer the issuer detail.
     * @var string
     */
    public $Issuer;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->Issuer = isset($data["Issuer"]) ? $data["Issuer"] : "";
        }
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }

    /**
     * Sets issuer
     * @param string $issuer the issuer detail.
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->Issuer = $issuer;
        return $this;
    }

}

