<?php

namespace Dnetix\MasterPass\Model;


/**
 * This class contains methods to get additional address details.
 */
class AddressExtensionPoint
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Line4' => 'Line4',
        'Line5' => 'Line5',
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
        'line4' => 'setLine4',
        'line5' => 'setLine5',
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
        'line4' => 'getLine4',
        'line5' => 'getLine5',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $line4 the address line 4 used to additional address information.
     * @var string
     */
    public $Line4;

    /**
     * $line5 the address line 5 used to remaining address information.
     * @var string
     */
    public $Line5;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->Line4 = isset($data["Line4"]) ? $data["Line4"] : "";
            $this->Line5 = isset($data["Line5"]) ? $data["Line5"] : "";
        }
    }

    /**
     * Gets line4
     * @return string
     */
    public function getLine4()
    {
        return $this->Line4;
    }

    /**
     * Sets line4
     * @param string $line4 the address line 4 used to additional address information.
     * @return $this
     */
    public function setLine4($line4)
    {

        $this->Line4 = $line4;
        return $this;
    }

    /**
     * Gets line5
     * @return string
     */
    public function getLine5()
    {
        return $this->Line5;
    }

    /**
     * Sets line5
     * @param string $line5 the address line 5 used to remaining address information.
     * @return $this
     */
    public function setLine5($line5)
    {

        $this->Line5 = $line5;
        return $this;
    }

}

