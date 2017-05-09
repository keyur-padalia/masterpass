<?php

namespace Dnetix\MasterPass\Model;


class Card extends BaseCard
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'BrandId' => 'BrandId',
        'ExpiryMonth' => 'ExpiryMonth',
        'AccountNumber' => 'AccountNumber',
        'CardHolderName' => 'CardHolderName',
        'ExtensionPoint' => 'CheckoutExtension',
        'BillingAddress' => 'Address',
        'BrandName' => 'BrandName',
        'ExpiryYear' => 'ExpiryYear',
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
        'brand_id' => 'setBrandId',
        'expiry_month' => 'setExpiryMonth',
        'account_number' => 'setAccountNumber',
        'card_holder_name' => 'setCardHolderName',
        'extension_point' => 'setExtensionPoint',
        'billing_address' => 'setBillingAddress',
        'brand_name' => 'setBrandName',
        'expiry_year' => 'setExpiryYear',
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
        'brand_id' => 'getBrandId',
        'expiry_month' => 'getExpiryMonth',
        'account_number' => 'getAccountNumber',
        'card_holder_name' => 'getCardHolderName',
        'extension_point' => 'getExtensionPoint',
        'billing_address' => 'getBillingAddress',
        'brand_name' => 'getBrandName',
        'expiry_year' => 'getExpiryYear',
    ];

    static function getters()
    {
        return parent::getters() + self::$getters;
    }


    /**
     * $brand_id the card brand id, for example, master for MasterCard.
     * @var string
     */
    public $BrandId;

    /**
     * $expiry_month the expiration month displayed on the payment card.
     * @var int
     */
    public $ExpiryMonth;

    /**
     * $account_number the account number.
     * @var string
     */
    public $AccountNumber;

    /**
     * $card_holder_name the cardholder name.
     * @var string
     */
    public $CardHolderName;

    /**
     * $extension_point the ExtensionPoint for future enhancement.
     * @var CheckoutExtension
     */
    public $ExtensionPoint;

    /**
     * $billing_address the billing address for the card holder.
     * @var Address
     */
    public $BillingAddress;

    /**
     * $brand_name the card brand name, for example, MasterCard.
     * @var string
     */
    public $BrandName;

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
        parent::__construct($data);
        if ($data != null) {
            $this->BrandId = isset($data["BrandId"]) ? $data["BrandId"] : "";
            $this->ExpiryMonth = isset($data["ExpiryMonth"]) ? $data["ExpiryMonth"] : "";
            $this->AccountNumber = isset($data["AccountNumber"]) ? $data["AccountNumber"] : "";
            $this->CardHolderName = isset($data["CardHolderName"]) ? $data["CardHolderName"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
            $this->BillingAddress = isset($data["BillingAddress"]) ? $data["BillingAddress"] : "";
            $this->BrandName = isset($data["BrandName"]) ? $data["BrandName"] : "";
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
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * Sets account_number
     * @param string $account_number the account number.
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        $this->AccountNumber = $account_number;
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
     * Gets extension_point
     * @return CheckoutExtension
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param CheckoutExtension $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
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

