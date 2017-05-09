<?php

namespace Dnetix\MasterPass\Model;


class CheckoutDSRP extends DSRP
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Eci' => 'Eci',
        'DSRPDataType' => 'DSRPDataType',
        'DSRPData' => 'DSRPData',
        'ExtensionPoint' => 'ExtensionPoint',
        'UnpredictableNumber' => 'UnpredictableNumber',
    ];

    static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    static $setters = [
        'eci' => 'setEci',
        'dsrp_data_type' => 'setDsrpDataType',
        'dsrp_data' => 'setDsrpData',
        'extension_point' => 'setExtensionPoint',
        'unpredictable_number' => 'setUnpredictableNumber',
    ];

    static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    static $getters = [
        'eci' => 'getEci',
        'dsrp_data_type' => 'getDsrpDataType',
        'dsrp_data' => 'getDsrpData',
        'extension_point' => 'getExtensionPoint',
        'unpredictable_number' => 'getUnpredictableNumber',
    ];

    static function getters()
    {
        return parent::getters() + self::$getters;
    }


    /**
     * $eci the electronic commerce indicator (ECI) value (DE 48 SE 42 position 3). Present only when DSRP data type is UCAF. For MasterCard brand cards, value is: 02Authenticated by ACS (Card Issuer Liability)
     * @var string
     */
    public $Eci;

    /**
     * $dsrp_data_type the type of cryptogram generated by the consumers MasterPass wallet. MasterPass passes the most secure selection (ICC) if the merchant or service provider has indicated they can accept both types (UCAF, ICC).
     * @var string
     */
    public $DSRPDataType;

    /**
     * $dsrp_data the DSRP cryptogram generated by the consumers MasterPass wallet.
     * @var string
     */
    public $DSRPData;

    /**
     * $extension_point the ExtensionPoint for future enhancement.
     * @var ExtensionPoint
     */
    public $ExtensionPoint;

    /**
     * $unpredictable_number the encoded EMV-quality random number generated by either the merchant or MasterPass.
     * @var string
     */
    public $UnpredictableNumber;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        if ($data != null) {
            $this->Eci = isset($data["Eci"]) ? $data["Eci"] : "";
            $this->DSRPDataType = isset($data["DSRPDataType"]) ? $data["DSRPDataType"] : "";
            $this->DSRPData = isset($data["DSRPData"]) ? $data["DSRPData"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
            $this->UnpredictableNumber = isset($data["UnpredictableNumber"]) ? $data["UnpredictableNumber"] : "";
        }
    }

    /**
     * Gets eci
     * @return string
     */
    public function getEci()
    {
        return $this->Eci;
    }

    /**
     * Sets eci
     * @param string $eci the electronic commerce indicator (ECI) value (DE 48 SE 42 position 3). Present only when DSRP data type is UCAF. For MasterCard brand cards, value is: 02Authenticated by ACS (Card Issuer Liability)
     * @return $this
     */
    public function setEci($eci)
    {

        $this->Eci = $eci;
        return $this;
    }

    /**
     * Gets dsrp_data_type
     * @return string
     */
    public function getDsrpDataType()
    {
        return $this->DSRPDataType;
    }

    /**
     * Sets dsrp_data_type
     * @param string $dsrp_data_type the type of cryptogram generated by the consumers MasterPass wallet. MasterPass passes the most secure selection (ICC) if the merchant or service provider has indicated they can accept both types (UCAF, ICC).
     * @return $this
     */
    public function setDsrpDataType($dsrp_data_type)
    {

        $this->DSRPDataType = $dsrp_data_type;
        return $this;
    }

    /**
     * Gets dsrp_data
     * @return string
     */
    public function getDsrpData()
    {
        return $this->DSRPData;
    }

    /**
     * Sets dsrp_data
     * @param string $dsrp_data the DSRP cryptogram generated by the consumers MasterPass wallet.
     * @return $this
     */
    public function setDsrpData($dsrp_data)
    {

        $this->DSRPData = $dsrp_data;
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
     * @param string $unpredictable_number the encoded EMV-quality random number generated by either the merchant or MasterPass.
     * @return $this
     */
    public function setUnpredictableNumber($unpredictable_number)
    {

        $this->UnpredictableNumber = $unpredictable_number;
        return $this;
    }

}

