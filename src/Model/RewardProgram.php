<?php

namespace Dnetix\MasterPass\Model;


/**
 * This class contains methods to get consumer reward program details.
 */
class RewardProgram
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'RewardNumber' => 'RewardNumber',
        'RewardId' => 'RewardId',
        'RewardName' => 'RewardName',
        'ExpiryMonth' => 'ExpiryMonth',
        'ExpiryYear' => 'ExpiryYear',
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
        'reward_number' => 'setRewardNumber',
        'reward_id' => 'setRewardId',
        'reward_name' => 'setRewardName',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
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
        'reward_number' => 'getRewardNumber',
        'reward_id' => 'getRewardId',
        'reward_name' => 'getRewardName',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $reward_number the reward number.
     * @var string
     */
    public $RewardNumber;

    /**
     * $reward_id the reward Id.
     * @var string
     */
    public $RewardId;

    /**
     * $reward_name the reward name.
     * @var string
     */
    public $RewardName;

    /**
     * $expiry_month the expiry month.
     * @var int
     */
    public $ExpiryMonth;

    /**
     * $expiry_year the expiry year.
     * @var int
     */
    public $ExpiryYear;

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
            $this->RewardNumber = isset($data["RewardNumber"]) ? $data["RewardNumber"] : "";
            $this->RewardId = isset($data["RewardId"]) ? $data["RewardId"] : "";
            $this->RewardName = isset($data["RewardName"]) ? $data["RewardName"] : "";
            $this->ExpiryMonth = isset($data["ExpiryMonth"]) ? $data["ExpiryMonth"] : "";
            $this->ExpiryYear = isset($data["ExpiryYear"]) ? $data["ExpiryYear"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets reward_number
     * @return string
     */
    public function getRewardNumber()
    {
        return $this->RewardNumber;
    }

    /**
     * Sets reward_number
     * @param string $reward_number the reward number.
     * @return $this
     */
    public function setRewardNumber($reward_number)
    {

        $this->RewardNumber = $reward_number;
        return $this;
    }

    /**
     * Gets reward_id
     * @return string
     */
    public function getRewardId()
    {
        return $this->RewardId;
    }

    /**
     * Sets reward_id
     * @param string $reward_id the reward Id.
     * @return $this
     */
    public function setRewardId($reward_id)
    {

        $this->RewardId = $reward_id;
        return $this;
    }

    /**
     * Gets reward_name
     * @return string
     */
    public function getRewardName()
    {
        return $this->RewardName;
    }

    /**
     * Sets reward_name
     * @param string $reward_name the reward name.
     * @return $this
     */
    public function setRewardName($reward_name)
    {

        $this->RewardName = $reward_name;
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
     * @param int $expiry_month the expiry month.
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
     * @param int $expiry_year the expiry year.
     * @return $this
     */
    public function setExpiryYear($expiry_year)
    {

        $this->ExpiryYear = $expiry_year;
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

