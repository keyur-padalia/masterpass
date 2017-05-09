<?php

namespace Dnetix\MasterPass\Model;


class ShippingAddress extends Address
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'RecipientPhoneNumber' => 'RecipientPhoneNumber',
        'Line3' => 'Line3',
        'Line2' => 'Line2',
        'Line1' => 'Line1',
        'PostalCode' => 'PostalCode',
        'CountrySubdivision' => 'CountrySubdivision',
        'RecipientName' => 'RecipientName',
        'ExtensionPoint' => 'AddressExtensionPoint',
        'Country' => 'Country',
        'City' => 'City',
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
        'recipient_phone_number' => 'setRecipientPhoneNumber',
        'line3' => 'setLine3',
        'line2' => 'setLine2',
        'line1' => 'setLine1',
        'postal_code' => 'setPostalCode',
        'country_subdivision' => 'setCountrySubdivision',
        'recipient_name' => 'setRecipientName',
        'extension_point' => 'setExtensionPoint',
        'country' => 'setCountry',
        'city' => 'setCity',
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
        'recipient_phone_number' => 'getRecipientPhoneNumber',
        'line3' => 'getLine3',
        'line2' => 'getLine2',
        'line1' => 'getLine1',
        'postal_code' => 'getPostalCode',
        'country_subdivision' => 'getCountrySubdivision',
        'recipient_name' => 'getRecipientName',
        'extension_point' => 'getExtensionPoint',
        'country' => 'getCountry',
        'city' => 'getCity',
    ];

    static function getters()
    {
        return parent::getters() + self::$getters;
    }


    /**
     * $recipient_phone_number the phone number of the person set to receive the shipped order.
     * @var string
     */
    public $RecipientPhoneNumber;

    /**
     * $line3 the address line 3 used to enter remaining address information if it does not fit in Line 1 and Line 2.
     * @var string
     */
    public $Line3;

    /**
     * $line2 the address line 2 used for Apt Number, Suite Number, and so on.
     * @var string
     */
    public $Line2;

    /**
     * $line1 the address line 1 used for Street number and Street Name.
     * @var string
     */
    public $Line1;

    /**
     * $postal_code the postal code or zip code appended to mailing address for the purpose of sorting mail.
     * @var string
     */
    public $PostalCode;

    /**
     * $country_subdivision the cardholder's country subdivision. Defined by ISO 3166-1 alpha-2 digit code, for example, US-VA is Virginia, US-OH is Ohio
     * @var string
     */
    public $CountrySubdivision;

    /**
     * $recipient_name the name of person set to receive the shipped order.
     * @var string
     */
    public $RecipientName;

    /**
     * $extension_point the AddressExtensionPoint for additional information.
     * @var AddressExtensionPoint
     */
    public $ExtensionPoint;

    /**
     * $country the cardholder's country. Defined by ISO 3166-1 alpha-2 digit country codes, for example, US is United States, AU is Australia, CA is Canada, GB is United Kingdom, and so on.
     * @var string
     */
    public $Country;

    /**
     * $city the cardholder's city.
     * @var string
     */
    public $City;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        if ($data != null) {
            $this->RecipientPhoneNumber = isset($data["RecipientPhoneNumber"]) ? $data["RecipientPhoneNumber"] : "";
            $this->Line3 = isset($data["Line3"]) ? $data["Line3"] : "";
            $this->Line2 = isset($data["Line2"]) ? $data["Line2"] : "";
            $this->Line1 = isset($data["Line1"]) ? $data["Line1"] : "";
            $this->PostalCode = isset($data["PostalCode"]) ? $data["PostalCode"] : "";
            $this->CountrySubdivision = isset($data["CountrySubdivision"]) ? $data["CountrySubdivision"] : "";
            $this->RecipientName = isset($data["RecipientName"]) ? $data["RecipientName"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
            $this->Country = isset($data["Country"]) ? $data["Country"] : "";
            $this->City = isset($data["City"]) ? $data["City"] : "";
        }
    }

    /**
     * Gets recipient_phone_number
     * @return string
     */
    public function getRecipientPhoneNumber()
    {
        return $this->RecipientPhoneNumber;
    }

    /**
     * Sets recipient_phone_number
     * @param string $recipient_phone_number the phone number of the person set to receive the shipped order.
     * @return $this
     */
    public function setRecipientPhoneNumber($recipient_phone_number)
    {

        $this->RecipientPhoneNumber = $recipient_phone_number;
        return $this;
    }

    /**
     * Gets line3
     * @return string
     */
    public function getLine3()
    {
        return $this->Line3;
    }

    /**
     * Sets line3
     * @param string $line3 the address line 3 used to enter remaining address information if it does not fit in Line 1 and Line 2.
     * @return $this
     */
    public function setLine3($line3)
    {

        $this->Line3 = $line3;
        return $this;
    }

    /**
     * Gets line2
     * @return string
     */
    public function getLine2()
    {
        return $this->Line2;
    }

    /**
     * Sets line2
     * @param string $line2 the address line 2 used for Apt Number, Suite Number, and so on.
     * @return $this
     */
    public function setLine2($line2)
    {

        $this->Line2 = $line2;
        return $this;
    }

    /**
     * Gets line1
     * @return string
     */
    public function getLine1()
    {
        return $this->Line1;
    }

    /**
     * Sets line1
     * @param string $line1 the address line 1 used for Street number and Street Name.
     * @return $this
     */
    public function setLine1($line1)
    {

        $this->Line1 = $line1;
        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * Sets postal_code
     * @param string $postal_code the postal code or zip code appended to mailing address for the purpose of sorting mail.
     * @return $this
     */
    public function setPostalCode($postal_code)
    {

        $this->PostalCode = $postal_code;
        return $this;
    }

    /**
     * Gets country_subdivision
     * @return string
     */
    public function getCountrySubdivision()
    {
        return $this->CountrySubdivision;
    }

    /**
     * Sets country_subdivision
     * @param string $country_subdivision the cardholder's country subdivision. Defined by ISO 3166-1 alpha-2 digit code, for example, US-VA is Virginia, US-OH is Ohio
     * @return $this
     */
    public function setCountrySubdivision($country_subdivision)
    {

        $this->CountrySubdivision = $country_subdivision;
        return $this;
    }

    /**
     * Gets recipient_name
     * @return string
     */
    public function getRecipientName()
    {
        return $this->RecipientName;
    }

    /**
     * Sets recipient_name
     * @param string $recipient_name the name of person set to receive the shipped order.
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {

        $this->RecipientName = $recipient_name;
        return $this;
    }

    /**
     * Gets extension_point
     * @return AddressExtensionPoint
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param AddressExtensionPoint $extension_point the AddressExtensionPoint for additional information.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets country
     * @param string $country the cardholder's country. Defined by ISO 3166-1 alpha-2 digit country codes, for example, US is United States, AU is Australia, CA is Canada, GB is United Kingdom, and so on.
     * @return $this
     */
    public function setCountry($country)
    {

        $this->Country = $country;
        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets city
     * @param string $city the cardholder's city.
     * @return $this
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }

}

