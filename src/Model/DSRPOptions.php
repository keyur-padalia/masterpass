<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set DSRP options for merchant initialization request during DSRP.
 */
class DSRPOptions
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Option' => 'Option',
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
        'option' => 'setOption',
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
        'option' => 'getOption',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $option the DSRP option.
     * @var Option[]
     */
    public $Option;

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
            $this->Option = isset($data["Option"]) ? $data["Option"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets option
     * @return Option[]
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets option
     * @param Option[] $option the DSRP option.
     * @return $this
     */
    public function setOption($option)
    {

        $this->Option = $option;
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

