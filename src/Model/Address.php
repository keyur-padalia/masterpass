<?php

namespace Dnetix\MasterPass\Model;


/**
 * This class contains methods to get consumer address details.
 */
class Address
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'City' => 'City',
        'Country' => 'Country',
        'CountrySubdivision' => 'CountrySubdivision',
        'Line1' => 'Line1',
        'Line2' => 'Line2',
        'Line3' => 'Line3',
        'PostalCode' => 'PostalCode',
        'ExtensionPoint' => 'AddressExtensionPoint',
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
        'city' => 'setCity',
        'country' => 'setCountry',
        'country_subdivision' => 'setCountrySubdivision',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'postal_code' => 'setPostalCode',
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
        'city' => 'getCity',
        'country' => 'getCountry',
        'country_subdivision' => 'getCountrySubdivision',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'postal_code' => 'getPostalCode',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $city the cardholder's city.
     * @var string
     */
    public $City;

    /**
     * $country the cardholder's country. Defined by ISO 3166-1 alpha-2 digit country codes, for example, US is United States, AU is Australia, CA is Canada, GB is United Kingdom, and so on.
     * @var string
     */
    public $Country;

    /**
     * $country_subdivision the cardholder's country subdivision. Defined by ISO 3166-1 alpha-2 digit code, for example, US-VA is Virginia, US-OH is Ohio
     * @var string
     */
    public $CountrySubdivision;

    /**
     * $line1 the address line 1 used for Street number and Street Name.
     * @var string
     */
    public $Line1;

    /**
     * $line2 the address line 2 used for Apt Number, Suite Number, and so on.
     * @var string
     */
    public $Line2;

    /**
     * $line3 the address line 3 used to enter remaining address information if it does not fit in Line 1 and Line 2.
     * @var string
     */
    public $Line3;

    /**
     * $postal_code the postal code or zip code appended to mailing address for the purpose of sorting mail.
     * @var string
     */
    public $PostalCode;

    /**
     * $extension_point the AddressExtensionPoint for additional information.
     * @var AddressExtensionPoint
     */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->City = isset($data["City"]) ? $data["City"] : "";
            $this->Country = isset($data["Country"]) ? $data["Country"] : "";
            $this->CountrySubdivision = isset($data["CountrySubdivision"]) ? $data["CountrySubdivision"] : "";
            $this->Line1 = isset($data["Line1"]) ? $data["Line1"] : "";
            $this->Line2 = isset($data["Line2"]) ? $data["Line2"] : "";
            $this->Line3 = isset($data["Line3"]) ? $data["Line3"] : "";
            $this->PostalCode = isset($data["PostalCode"]) ? $data["PostalCode"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
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

}

