<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods regarding installment options.
 */
class InstallmentOptions
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'InstallmentOption' => 'InstallmentOption',
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
        'installment_option' => 'setInstallmentOption',
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
        'installment_option' => 'getInstallmentOption',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $installment_option the installment option.
     * @var InstallmentOption
     */
    public $InstallmentOption;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->InstallmentOption = isset($data["InstallmentOption"]) ? $data["InstallmentOption"] : "";
        }
    }

    /**
     * Gets installment_option
     * @return InstallmentOption
     */
    public function getInstallmentOption()
    {
        return $this->InstallmentOption;
    }

    /**
     * Sets installment_option
     * @param InstallmentOption $installment_option the installment option.
     * @return $this
     */
    public function setInstallmentOption($installment_option)
    {
        $this->InstallmentOption = $installment_option;
        return $this;
    }

}

