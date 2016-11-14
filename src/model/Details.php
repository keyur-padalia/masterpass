<?php




/**
 * Details
 *
 * PHP version 5
 *
 * @category Class
 * @package  masterpass-merchant
 */

/**
 * Details Class Doc Comment
 *
 * @category    Class
 * @description The error details.
 * @package     masterpass-merchant
 */
 
class Details 
{
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'Detail' => 'Detail'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'detail' => 'setDetail'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'detail' => 'getDetail'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $detail the error detail.
      * @var \mastercard_masterpass_merchant\model\Detail[]
      */
    public $Detail;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->Detail = $data["Detail"];
        }
    }
    
    /**
     * Gets detail
     * @return \mastercard_masterpass_merchant\model\Detail[]
     */
    public function getDetail()
    {
        return $this->Detail;
    }
  
    /**
     * Sets detail
     * @param \mastercard_masterpass_merchant\model\Detail[] $detail the error detail.
     * @return $this
     */
    public function setDetail($detail)
    {
        
        $this->Detail = $detail;
        return $this;
    }
    
    
    

}

