<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set DSRP details for merchant initialization request during DSRP.
 */
class MerchantInitializationExtension
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'DSRP' => 'DSRPExtension',
        'SecondaryOriginUrl' => 'SecondaryOriginUrl',
        'PaymentOptions' => 'PaymentOptionsExtensions',
        'PrivateDatas' => 'PrivateDatas',
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
        'dsrp' => 'setDsrp',
        'secondary_origin_url' => 'setSecondaryOriginUrl',
        'payment_options' => 'setPaymentOptions',
        'private_datas' => 'setPrivateDatas',
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
        'dsrp' => 'getDsrp',
        'secondary_origin_url' => 'getSecondaryOriginUrl',
        'payment_options' => 'getPaymentOptions',
        'private_datas' => 'getPrivateDatas',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $dsrp the DSRP for merchant initialization request.
     * @var DSRPExtension
     */
    public $DSRP;

    /**
     * $secondary_origin_url the secondary origin url.
     * @var string
     */
    public $SecondaryOriginUrl;

    /**
     * $payment_options the payment options.
     * @var PaymentOptionsExtensions
     */
    public $PaymentOptions;

    /**
     * $private_datas the private data.
     * @var PrivateDatas
     */
    public $PrivateDatas;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->DSRP = isset($data["DSRP"]) ? $data["DSRP"] : "";
            $this->SecondaryOriginUrl = isset($data["SecondaryOriginUrl"]) ? $data["SecondaryOriginUrl"] : "";
            $this->PaymentOptions = isset($data["PaymentOptions"]) ? $data["PaymentOptions"] : "";
            $this->PrivateDatas = isset($data["PrivateDatas"]) ? $data["PrivateDatas"] : "";
        }
    }

    /**
     * Gets dsrp
     * @return DSRPExtension
     */
    public function getDsrp()
    {
        return $this->DSRP;
    }

    /**
     * Sets dsrp
     * @param DSRPExtension $dsrp the DSRP for merchant initialization request.
     * @return $this
     */
    public function setDsrp($dsrp)
    {
        $this->DSRP = $dsrp;
        return $this;
    }

    /**
     * Gets secondary_origin_url
     * @return string
     */
    public function getSecondaryOriginUrl()
    {
        return $this->SecondaryOriginUrl;
    }

    /**
     * Sets secondary_origin_url
     * @param string $secondary_origin_url the secondary origin url.
     * @return $this
     */
    public function setSecondaryOriginUrl($secondary_origin_url)
    {
        $this->SecondaryOriginUrl = $secondary_origin_url;
        return $this;
    }

    /**
     * Gets payment_options
     * @return PaymentOptionsExtensions
     */
    public function getPaymentOptions()
    {
        return $this->PaymentOptions;
    }

    /**
     * Sets payment_options
     * @param PaymentOptionsExtensions $payment_options the payment options.
     * @return $this
     */
    public function setPaymentOptions($payment_options)
    {
        $this->PaymentOptions = $payment_options;
        return $this;
    }

    /**
     * Gets private_datas
     * @return PrivateDatas
     */
    public function getPrivateDatas()
    {
        return $this->PrivateDatas;
    }

    /**
     * Sets private_datas
     * @param PrivateDatas $private_datas the private data.
     * @return $this
     */
    public function setPrivateDatas($private_datas)
    {
        $this->PrivateDatas = $private_datas;
        return $this;
    }

}
