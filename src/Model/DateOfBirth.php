<?php

namespace Dnetix\MasterPass\Model;


/**
 * This class contains methods related to date of birth.
 */
class DateOfBirth
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Year' => 'Year',
        'Month' => 'Month',
        'Day' => 'Day',
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
        'year' => 'setYear',
        'month' => 'setMonth',
        'day' => 'setDay',
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
        'year' => 'getYear',
        'month' => 'getMonth',
        'day' => 'getDay',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $year the contact DOB Year.
     * @var int
     */
    public $Year;

    /**
     * $month the contact DOB Month.
     * @var int
     */
    public $Month;

    /**
     * $day the contact DOB Day.
     * @var int
     */
    public $Day;

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
            $this->Year = isset($data["Year"]) ? $data["Year"] : "";
            $this->Month = isset($data["Month"]) ? $data["Month"] : "";
            $this->Day = isset($data["Day"]) ? $data["Day"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets year
     * @return int
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * Sets year
     * @param int $year the contact DOB Year.
     * @return $this
     */
    public function setYear($year)
    {

        $this->Year = $year;
        return $this;
    }

    /**
     * Gets month
     * @return int
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * Sets month
     * @param int $month the contact DOB Month.
     * @return $this
     */
    public function setMonth($month)
    {

        $this->Month = $month;
        return $this;
    }

    /**
     * Gets day
     * @return int
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * Sets day
     * @param int $day the contact DOB Day.
     * @return $this
     */
    public function setDay($day)
    {

        $this->Day = $day;
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

