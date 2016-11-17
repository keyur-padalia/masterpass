<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains various methods for to set different shopping cart request parameters required for Shopping Cart Service.
 */
class ShoppingCartRequest
{
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'OAuthToken' => 'OAuthToken',
        'ShoppingCart' => 'ShoppingCart',
        'ExtensionPoint' => 'ShoppingCartRequestExtensionPoint'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'o_auth_token' => 'setOAuthToken',
        'shopping_cart' => 'setShoppingCart',
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
        'o_auth_token' => 'getOAuthToken',
        'shopping_cart' => 'getShoppingCart',
        'extension_point' => 'getExtensionPoint'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $o_auth_token the request Token (oauth_token) returned by call to the request_token API.
      * @var string
      */
    public $OAuthToken;
    
    /**
      * $shopping_cart the Shopping Cart details.
      * @var ShoppingCart
      */
    public $ShoppingCart;
    
    /**
      * $extension_point the ExtensionPoint for future enhancement.
      * @var ShoppingCartRequestExtensionPoint
      */
    public $ExtensionPoint;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->OAuthToken = isset($data["OAuthToken"])?$data["OAuthToken"]:"";
            $this->ShoppingCart = isset($data["ShoppingCart"])?$data["ShoppingCart"]:"";
            $this->ExtensionPoint = isset($data["ExtensionPoint"])?$data["ExtensionPoint"]:"";
        }
    }
    
    /**
     * Gets o_auth_token
     * @return string
     */
    public function getOAuthToken()
    {
        return $this->OAuthToken;
    }
  
    /**
     * Sets o_auth_token
     * @param string $o_auth_token the request Token (oauth_token) returned by call to the request_token API.
     * @return $this
     */
    public function setOAuthToken($o_auth_token)
    {
        
        $this->OAuthToken = $o_auth_token;
        return $this;
    }
    
    /**
     * Gets shopping_cart
     * @return ShoppingCart
     */
    public function getShoppingCart()
    {
        return $this->ShoppingCart;
    }
  
    /**
     * Sets shopping_cart
     * @param ShoppingCart $shopping_cart the Shopping Cart details.
     * @return $this
     */
    public function setShoppingCart($shopping_cart)
    {
        
        $this->ShoppingCart = $shopping_cart;
        return $this;
    }
    
    /**
     * Gets extension_point
     * @return ShoppingCartRequestExtensionPoint
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }
  
    /**
     * Sets extension_point
     * @param ShoppingCartRequestExtensionPoint $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {
        
        $this->ExtensionPoint = $extension_point;
        return $this;
    }

}

