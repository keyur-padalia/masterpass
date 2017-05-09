<?php

namespace Dnetix\MasterPass\Model;

/**
 * ExtensionPoint Class Doc Comment
 */
class ExtensionPoint
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'any' => 'any',
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
        'any' => 'setAny',
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
        'any' => 'getAny',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $any
     * @var object
     */
    public $any;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->any = $data["any"];
        }
    }

    /**
     * Gets any
     * @return object
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * Sets any
     * @param object $any
     * @return $this
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }

}

