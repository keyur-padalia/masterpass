<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set option details for merchant initialization request during DSRP.
 */
class Option
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'BrandId' => 'BrandId',
        'AcceptanceType' => 'AcceptanceType',
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
        'brand_id' => 'setBrandId',
        'acceptance_type' => 'setAcceptanceType',
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
        'brand_id' => 'getBrandId',
        'acceptance_type' => 'getAcceptanceType',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $brand_id the brand id required for DSRP transactions. Identifies the card brands for which DSRP is desired. Currently, the only valid card ID is: master
     * @var string
     */
    public $BrandId;

    /**
     * $acceptance_type the acceptance type required for DSRPtransactions. Indicates the type(s) of cryptograms the merchant or service provider can accept. Valid types are: UCAF and/or ICC (see descriptions that follow). MasterPass passes the most secure selection (ICC) if both acceptance types are indicated.
     * @var string
     */
    public $AcceptanceType;

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
            $this->BrandId = isset($data["BrandId"]) ? $data["BrandId"] : "";
            $this->AcceptanceType = isset($data["AcceptanceType"]) ? $data["AcceptanceType"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets brand_id
     * @return string
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }

    /**
     * Sets brand_id
     * @param string $brand_id the brand id required for DSRP transactions. Identifies the card brands for which DSRP is desired. Currently, the only valid card ID is: master
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->BrandId = $brand_id;
        return $this;
    }

    /**
     * Gets acceptance_type
     * @return string
     */
    public function getAcceptanceType()
    {
        return $this->AcceptanceType;
    }

    /**
     * Sets acceptance_type
     * @param string $acceptance_type the acceptance type required for DSRPtransactions. Indicates the type(s) of cryptograms the merchant or service provider can accept. Valid types are: UCAF and/or ICC (see descriptions that follow). MasterPass passes the most secure selection (ICC) if both acceptance types are indicated.
     * @return $this
     */
    public function setAcceptanceType($acceptance_type)
    {
        $allowed_values = ["NONE", "ICC", "UCAF"];
        if (!in_array($acceptance_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'acceptance_type', must be one of 'NONE', 'ICC', 'UCAF'");
        }
        $this->AcceptanceType = $acceptance_type;
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

