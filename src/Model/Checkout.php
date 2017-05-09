<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains various methods for to set the different values like card, contact, shipping address, authentication options, reward program details.
 */
class Checkout
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'Card' => 'Card',
        'TransactionId' => 'TransactionId',
        'Contact' => 'Contact',
        'ShippingAddress' => 'ShippingAddress',
        'AuthenticationOptions' => 'AuthenticationOptions',
        'RewardProgram' => 'RewardProgram',
        'WalletID' => 'WalletID',
        'PreCheckoutTransactionId' => 'PreCheckoutTransactionId',
        'ExtensionPoint' => 'CheckoutExtension',
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
        'card' => 'setCard',
        'transaction_id' => 'setTransactionId',
        'contact' => 'setContact',
        'shipping_address' => 'setShippingAddress',
        'authentication_options' => 'setAuthenticationOptions',
        'reward_program' => 'setRewardProgram',
        'wallet_id' => 'setWalletId',
        'pre_checkout_transaction_id' => 'setPreCheckoutTransactionId',
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
        'card' => 'getCard',
        'transaction_id' => 'getTransactionId',
        'contact' => 'getContact',
        'shipping_address' => 'getShippingAddress',
        'authentication_options' => 'getAuthenticationOptions',
        'reward_program' => 'getRewardProgram',
        'wallet_id' => 'getWalletId',
        'pre_checkout_transaction_id' => 'getPreCheckoutTransactionId',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $card the card details.
     * @var Card
     */
    public $Card;

    /**
     * $transaction_id the transaction id.
     * @var string
     */
    public $TransactionId;

    /**
     * $contact the contact details.
     * @var Contact
     */
    public $Contact;

    /**
     * $shipping_address the shipping address details.
     * @var ShippingAddress
     */
    public $ShippingAddress;

    /**
     * $authentication_options the authentication options.
     * @var AuthenticationOptions
     */
    public $AuthenticationOptions;

    /**
     * $reward_program the reward program details.
     * @var RewardProgram
     */
    public $RewardProgram;

    /**
     * $wallet_id the value which helps to identify origin wallet.
     * @var string
     */
    public $WalletID;

    /**
     * $pre_checkout_transaction_id the ID associated with the PreCheckout Transaction.
     * @var string
     */
    public $PreCheckoutTransactionId;

    /**
     * $extension_point the ExtensionPoint for future enhancement.
     * @var CheckoutExtension
     */
    public $ExtensionPoint;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {

            if (is_object($data))
                $data = (array)$data;

            $this->Card = isset($data["Card"]) ? $data["Card"] : "";
            $this->TransactionId = isset($data["TransactionId"]) ? $data["TransactionId"] : "";
            $this->Contact = isset($data["Contact"]) ? $data["Contact"] : "";
            $this->ShippingAddress = isset($data["ShippingAddress"]) ? $data["ShippingAddress"] : "";
            $this->AuthenticationOptions = isset($data["AuthenticationOptions"]) ? $data["AuthenticationOptions"] : "";
            $this->RewardProgram = isset($data["RewardProgram"]) ? $data["RewardProgram"] : "";
            $this->WalletID = isset($data["WalletID"]) ? $data["WalletID"] : "";
            $this->PreCheckoutTransactionId = isset($data["PreCheckoutTransactionId"]) ? $data["PreCheckoutTransactionId"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets card
     * @return Card
     */
    public function getCard()
    {
        if (!($this->Card instanceof Card)) {
            $this->Card = new Card($this->Card);
        }
        return $this->Card;
    }

    /**
     * Sets card
     * @param Card $card the card details.
     * @return $this
     */
    public function setCard($card)
    {

        $this->Card = $card;
        return $this;
    }

    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * Sets transaction_id
     * @param string $transaction_id the transaction id.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {

        $this->TransactionId = $transaction_id;
        return $this;
    }

    /**
     * Gets contact
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Sets contact
     * @param Contact $contact the contact details.
     * @return $this
     */
    public function setContact($contact)
    {

        $this->Contact = $contact;
        return $this;
    }

    /**
     * Gets shipping_address
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     * Sets shipping_address
     * @param ShippingAddress $shipping_address the shipping address details.
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {

        $this->ShippingAddress = $shipping_address;
        return $this;
    }

    /**
     * Gets authentication_options
     * @return AuthenticationOptions
     */
    public function getAuthenticationOptions()
    {
        return $this->AuthenticationOptions;
    }

    /**
     * Sets authentication_options
     * @param AuthenticationOptions $authentication_options the authentication options.
     * @return $this
     */
    public function setAuthenticationOptions($authentication_options)
    {

        $this->AuthenticationOptions = $authentication_options;
        return $this;
    }

    /**
     * Gets reward_program
     * @return RewardProgram
     */
    public function getRewardProgram()
    {
        return $this->RewardProgram;
    }

    /**
     * Sets reward_program
     * @param RewardProgram $reward_program the reward program details.
     * @return $this
     */
    public function setRewardProgram($reward_program)
    {

        $this->RewardProgram = $reward_program;
        return $this;
    }

    /**
     * Gets wallet_id
     * @return string
     */
    public function getWalletId()
    {
        return $this->WalletID;
    }

    /**
     * Sets wallet_id
     * @param string $wallet_id the value which helps to identify origin wallet.
     * @return $this
     */
    public function setWalletId($wallet_id)
    {

        $this->WalletID = $wallet_id;
        return $this;
    }

    /**
     * Gets pre_checkout_transaction_id
     * @return string
     */
    public function getPreCheckoutTransactionId()
    {
        return $this->PreCheckoutTransactionId;
    }

    /**
     * Sets pre_checkout_transaction_id
     * @param string $pre_checkout_transaction_id the ID associated with the PreCheckout Transaction.
     * @return $this
     */
    public function setPreCheckoutTransactionId($pre_checkout_transaction_id)
    {

        $this->PreCheckoutTransactionId = $pre_checkout_transaction_id;
        return $this;
    }

    /**
     * Gets extension_point
     * @return CheckoutExtension
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point
     * @param CheckoutExtension $extension_point the ExtensionPoint for future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {

        $this->ExtensionPoint = $extension_point;
        return $this;
    }

}

