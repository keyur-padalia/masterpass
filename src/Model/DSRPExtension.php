<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set DSRP extension for merchant initialization request during DSRP.
 *
 * @category    Class
 * @description This class contains methods require to set DSRP extension for merchant initialization request during DSRP.
 * @package     masterpass-merchant
 * @subpackage  model
 */
class DSRPExtension
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'DSRPOptions' => 'DSRPOptions',
        'UnpredictableNumber' => 'UnpredictableNumber',
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
        'dsrp_options' => 'setDsrpOptions',
        'unpredictable_number' => 'setUnpredictableNumber',
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
        'dsrp_options' => 'getDsrpOptions',
        'unpredictable_number' => 'getUnpredictableNumber',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $dsrp_options the DSRP options details.
     * @var DSRPOptions
     */
    public $DSRPOptions;

    /**
     * $unpredictable_number the unpredictable number. EMVquality random number generated by the merchant, service provider, or,if null,by MasterPass and Base64 encoded
     * @var string
     */
    public $UnpredictableNumber;

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
            $this->DSRPOptions = isset($data["DSRPOptions"]) ? $data["DSRPOptions"] : "";
            $this->UnpredictableNumber = isset($data["UnpredictableNumber"]) ? $data["UnpredictableNumber"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets dsrp_options
     * @return DSRPOptions
     */
    public function getDsrpOptions()
    {
        return $this->DSRPOptions;
    }

    /**
     * Sets dsrp_options
     * @param DSRPOptions $dsrp_options the DSRP options details.
     * @return $this
     */
    public function setDsrpOptions($dsrp_options)
    {

        $this->DSRPOptions = $dsrp_options;
        return $this;
    }

    /**
     * Gets unpredictable_number
     * @return string
     */
    public function getUnpredictableNumber()
    {
        return $this->UnpredictableNumber;
    }

    /**
     * Sets unpredictable_number
     * @param string $unpredictable_number the unpredictable number. EMVquality random number generated by the merchant, service provider, or,if null,by MasterPass and Base64 encoded
     * @return $this
     */
    public function setUnpredictableNumber($unpredictable_number)
    {

        $this->UnpredictableNumber = $unpredictable_number;
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

