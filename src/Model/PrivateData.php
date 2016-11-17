<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set private data details.
 */
class PrivateData
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'SchemaLocation' => 'SchemaLocation',
        'Payload' => 'ExtensionPoint',
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
        'schema_location' => 'setSchemaLocation',
        'payload' => 'setPayload',
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
        'schema_location' => 'getSchemaLocation',
        'payload' => 'getPayload',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $schema_location the DSRP cryptogram generated by the consumers MasterPass wallet.
     * @var string
     */
    public $SchemaLocation;

    /**
     * $payload the ExtensionPoint for future enhancement.
     * @var ExtensionPoint
     */
    public $Payload;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->SchemaLocation = isset($data["SchemaLocation"]) ? $data["SchemaLocation"] : "";
            $this->Payload = isset($data["Payload"]) ? $data["Payload"] : "";
        }
    }

    /**
     * Gets schema_location
     * @return string
     */
    public function getSchemaLocation()
    {
        return $this->SchemaLocation;
    }

    /**
     * Sets schema_location
     * @param string $schema_location the DSRP cryptogram generated by the consumers MasterPass wallet.
     * @return $this
     */
    public function setSchemaLocation($schema_location)
    {
        $this->SchemaLocation = $schema_location;
        return $this;
    }

    /**
     * Gets payload
     * @return ExtensionPoint
     */
    public function getPayload()
    {
        return $this->Payload;
    }

    /**
     * Sets payload
     * @param ExtensionPoint $payload the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->Payload = $payload;
        return $this;
    }

}

