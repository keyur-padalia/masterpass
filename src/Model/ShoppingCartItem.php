<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains various methods for to set shopping cart items required for Shopping Cart Service.
 */
class ShoppingCartItem
{
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'Description' => 'Description',
        'Quantity' => 'Quantity',
        'Value' => 'Value',
        'ImageURL' => 'ImageURL',
        'ExtensionPoint' => 'ExtensionPoint'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'value' => 'setValue',
        'image_url' => 'setImageUrl',
        'extension_point' => 'setExtensionPoint'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'value' => 'getValue',
        'image_url' => 'getImageUrl',
        'extension_point' => 'getExtensionPoint'
    );
  
    static function getters() {
        return self::$getters;
    }
    
    /**
      * $description the description shopping cart item.
      * @var string
      */
    public $Description;
    
    /**
      * $quantity the number of shopping cart item.
      * @var int
      */
    public $Quantity;
    
    /**
      * $value the price or monetary value of a single shopping cart item. Cost * Quantity. Integer without decimal, for example, USD 100.00 is 10000.
      * @var int
      */
    public $Value;
    
    /**
      * $image_url the image URL of the shopping cart item.
      * @var string
      */
    public $ImageURL;
    
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
            $this->Description = isset($data["Description"])?$data["Description"]:"";
            $this->Quantity = isset($data["Quantity"])?$data["Quantity"]:"";
            $this->Value = isset($data["Value"])?$data["Value"]:"";
            $this->ImageURL = isset($data["ImageURL"])?$data["ImageURL"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
  
    /**
     * Sets description
     * @param string $description the description shopping cart item.
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity the number of shopping cart item.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Gets value
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }
  
    /**
     * Sets value
     * @param int $value the price or monetary value of a single shopping cart item. Cost * Quantity. Integer without decimal, for example, USD 100.00 is 10000.
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->ImageURL;
    }
  
    /**
     * Sets image_url
     * @param string $image_url the image URL of the shopping cart item.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->ImageURL = $image_url;
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

