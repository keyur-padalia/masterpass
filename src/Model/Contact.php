<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods to get consumer contact information.
 */
class Contact
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'FirstName' => 'FirstName',
        'MiddleName' => 'MiddleName',
        'LastName' => 'LastName',
        'Gender' => 'Gender',
        'DateOfBirth' => 'DateOfBirth',
        'NationalID' => 'NationalID',
        'Country' => 'Country',
        'EmailAddress' => 'EmailAddress',
        'PhoneNumber' => 'PhoneNumber',
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
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'gender' => 'setGender',
        'date_of_birth' => 'setDateOfBirth',
        'national_id' => 'setNationalId',
        'country' => 'setCountry',
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
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
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'gender' => 'getGender',
        'date_of_birth' => 'getDateOfBirth',
        'national_id' => 'getNationalId',
        'country' => 'getCountry',
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $first_name the contact first name.
     * @var string
     */
    public $FirstName;

    /**
     * $middle_name the contact middle name or initial.
     * @var string
     */
    public $MiddleName;

    /**
     * $last_name the contact surname.
     * @var string
     */
    public $LastName;

    /**
     * $gender the contact Gender (M or F). NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @var string
     */
    public $Gender;

    /**
     * $date_of_birth the contact DOB - YYYY/MM/DD. NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @var DateOfBirth
     */
    public $DateOfBirth;

    /**
     * $national_id the contact National Identification. NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @var string
     */
    public $NationalID;

    /**
     * $country the contact country of residence.
     * @var string
     */
    public $Country;

    /**
     * $email_address the contact email aAddress.
     * @var string
     */
    public $EmailAddress;

    /**
     * $phone_number the contact phone.
     * @var string
     */
    public $PhoneNumber;

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
            $this->FirstName = isset($data["FirstName"]) ? $data["FirstName"] : "";
            $this->MiddleName = isset($data["MiddleName"]) ? $data["MiddleName"] : "";
            $this->LastName = isset($data["LastName"]) ? $data["LastName"] : "";
            $this->Gender = isset($data["Gender"]) ? $data["Gender"] : "";
            $this->DateOfBirth = isset($data["DateOfBirth"]) ? $data["DateOfBirth"] : "";
            $this->NationalID = isset($data["NationalID"]) ? $data["NationalID"] : "";
            $this->Country = isset($data["Country"]) ? $data["Country"] : "";
            $this->EmailAddress = isset($data["EmailAddress"]) ? $data["EmailAddress"] : "";
            $this->PhoneNumber = isset($data["PhoneNumber"]) ? $data["PhoneNumber"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Sets first_name
     * @param string $first_name the contact first name.
     * @return $this
     */
    public function setFirstName($first_name)
    {

        $this->FirstName = $first_name;
        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * Sets middle_name
     * @param string $middle_name the contact middle name or initial.
     * @return $this
     */
    public function setMiddleName($middle_name)
    {

        $this->MiddleName = $middle_name;
        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Sets last_name
     * @param string $last_name the contact surname.
     * @return $this
     */
    public function setLastName($last_name)
    {

        $this->LastName = $last_name;
        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Sets gender
     * @param string $gender the contact Gender (M or F). NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = ["M", "F"];
        if (!in_array($gender, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'M', 'F'");
        }
        $this->Gender = $gender;
        return $this;
    }

    /**
     * Gets date_of_birth
     * @return DateOfBirth
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }

    /**
     * Sets date_of_birth
     * @param DateOfBirth $date_of_birth the contact DOB - YYYY/MM/DD. NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {

        $this->DateOfBirth = $date_of_birth;
        return $this;
    }

    /**
     * Gets national_id
     * @return string
     */
    public function getNationalId()
    {
        return $this->NationalID;
    }

    /**
     * Sets national_id
     * @param string $national_id the contact National Identification. NOTE: This field may only be requested from a MasterPass wallet if it is required by law in a region. Merchants and service providers seeking to use this field must work with the local MasterPass representative to get the necessary clearances before requesting these data elements.
     * @return $this
     */
    public function setNationalId($national_id)
    {

        $this->NationalID = $national_id;
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
     * @param string $country the contact country of residence.
     * @return $this
     */
    public function setCountry($country)
    {

        $this->Country = $country;
        return $this;
    }

    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * Sets email_address
     * @param string $email_address the contact email aAddress.
     * @return $this
     */
    public function setEmailAddress($email_address)
    {

        $this->EmailAddress = $email_address;
        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets phone_number
     * @param string $phone_number the contact phone.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {

        $this->PhoneNumber = $phone_number;
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

