<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods to get consumer card brand information.
 */
class BaseCard
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'BrandId' => 'BrandId',
        'BrandName' => 'BrandName',
        'BillingAddress' => 'Address',
        'CardHolderName' => 'CardHolderName',
        'ExpiryMonth' => 'ExpiryMonth',
        'ExpiryYear' => 'ExpiryYear',
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
        'brand_name' => 'setBrandName',
        'billing_address' => 'setBillingAddress',
        'card_holder_name' => 'setCardHolderName',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
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
        'brand_name' => 'getBrandName',
        'billing_address' => 'getBillingAddress',
        'card_holder_name' => 'getCardHolderName',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $brand_id the card brand id, for example, master for MasterCard.
     * @var string
     */
    public $BrandId;

    /**
     * $brand_name the card brand name, for example, MasterCard.
     * @var string
     */
    public $BrandName;

    /**
     * $billing_address the billing address for the card holder.
     * @var Address
     */
    public $BillingAddress;

    /**
     * $card_holder_name the cardholder name.
     * @var string
     */
    public $CardHolderName;

    /**
     * $expiry_month the expiration month displayed on the payment card.
     * @var int
     */
    public $ExpiryMonth;

    /**
     * $expiry_year the expiration year displayed on the payment card.
     * @var int
     */
    public $ExpiryYear;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->BrandId = isset($data["BrandId"]) ? $data["BrandId"] : "";
            $this->BrandName = isset($data["BrandName"]) ? $data["BrandName"] : "";
            $this->BillingAddress = isset($data["BillingAddress"]) ? $data["BillingAddress"] : "";
            $this->CardHolderName = isset($data["CardHolderName"]) ? $data["CardHolderName"] : "";
            $this->ExpiryMonth = isset($data["ExpiryMonth"]) ? $data["ExpiryMonth"] : "";
            $this->ExpiryYear = isset($data["ExpiryYear"]) ? $data["ExpiryYear"] : "";
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
     * @param string $brand_id the card brand id, for example, master for MasterCard.
     * @return $this
     */
    public function setBrandId($brand_id)
    {

        $this->BrandId = $brand_id;
        return $this;
    }

    /**
     * Gets brand_name
     * @return string
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }

    /**
     * Sets brand_name
     * @param string $brand_name the card brand name, for example, MasterCard.
     * @return $this
     */
    public function setBrandName($brand_name)
    {

        $this->BrandName = $brand_name;
        return $this;
    }

    /**
     * Gets billing_address
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * Sets billing_address
     * @param Address $billing_address the billing address for the card holder.
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {

        $this->BillingAddress = $billing_address;
        return $this;
    }

    /**
     * Gets card_holder_name
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }

    /**
     * Sets card_holder_name
     * @param string $card_holder_name the cardholder name.
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {

        $this->CardHolderName = $card_holder_name;
        return $this;
    }

    /**
     * Gets expiry_month
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }

    /**
     * Sets expiry_month
     * @param int $expiry_month the expiration month displayed on the payment card.
     * @return $this
     */
    public function setExpiryMonth($expiry_month)
    {

        $this->ExpiryMonth = $expiry_month;
        return $this;
    }

    /**
     * Gets expiry_year
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }

    /**
     * Sets expiry_year
     * @param int $expiry_year the expiration year displayed on the payment card.
     * @return $this
     */
    public function setExpiryYear($expiry_year)
    {

        $this->ExpiryYear = $expiry_year;
        return $this;
    }


}

