<?php

namespace Dnetix\MasterPass\Model;


/**
 * MerchantTransaction
 */
class MerchantTransaction
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'TransactionId' => 'TransactionId',
        'ConsumerKey' => 'ConsumerKey',
        'Currency' => 'Currency',
        'OrderAmount' => 'OrderAmount',
        'PurchaseDate' => 'PurchaseDate',
        'TransactionStatus' => 'TransactionStatus',
        'ApprovalCode' => 'ApprovalCode',
        'PreCheckoutTransactionId' => 'PreCheckoutTransactionId',
        'ExpressCheckoutIndicator' => 'ExpressCheckoutIndicator',
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
        'transaction_id' => 'setTransactionId',
        'consumer_key' => 'setConsumerKey',
        'currency' => 'setCurrency',
        'order_amount' => 'setOrderAmount',
        'purchase_date' => 'setPurchaseDate',
        'transaction_status' => 'setTransactionStatus',
        'approval_code' => 'setApprovalCode',
        'pre_checkout_transaction_id' => 'setPreCheckoutTransactionId',
        'express_checkout_indicator' => 'setExpressCheckoutIndicator',
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
        'transaction_id' => 'getTransactionId',
        'consumer_key' => 'getConsumerKey',
        'currency' => 'getCurrency',
        'order_amount' => 'getOrderAmount',
        'purchase_date' => 'getPurchaseDate',
        'transaction_status' => 'getTransactionStatus',
        'approval_code' => 'getApprovalCode',
        'pre_checkout_transaction_id' => 'getPreCheckoutTransactionId',
        'express_checkout_indicator' => 'getExpressCheckoutIndicator',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $transaction_id the transaction Id.
     * @var string
     */
    public $TransactionId;

    /**
     * $consumer_key the consumer key from checkout project.
     * @var string
     */
    public $ConsumerKey;

    /**
     * $currency the currency for the transaction, for example, USD.
     * @var string
     */
    public $Currency;

    /**
     * $order_amount the transaction order amount, for example, 1500 (for USD 15 transaction amount)
     * @var int
     */
    public $OrderAmount;

    /**
     * $purchase_date the date of purchase.
     * @var string
     */
    public $PurchaseDate;

    /**
     * $transaction_status the status of transaction. Valid values are, SUCCESS: For approved transaction and FAILURE: For declined transaction.
     * @var string
     */
    public $TransactionStatus;

    /**
     * $approval_code the six-digit approval code returned by payment API.
     * @var string
     */
    public $ApprovalCode;

    /**
     * $pre_checkout_transaction_id the precheckout transaction id element of the PrecheckoutData.(This is not required for Standard Checkout)
     * @var string
     */
    public $PreCheckoutTransactionId;

    /**
     * $express_checkout_indicator the express checkout indicator. Set to true for express checkout
     * @var bool
     */
    public $ExpressCheckoutIndicator;

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
            $this->TransactionId = isset($data["TransactionId"]) ? $data["TransactionId"] : "";
            $this->ConsumerKey = isset($data["ConsumerKey"]) ? $data["ConsumerKey"] : "";
            $this->Currency = isset($data["Currency"]) ? $data["Currency"] : "";
            $this->OrderAmount = isset($data["OrderAmount"]) ? $data["OrderAmount"] : "";
            $this->PurchaseDate = isset($data["PurchaseDate"]) ? $data["PurchaseDate"] : "";
            $this->TransactionStatus = isset($data["TransactionStatus"]) ? $data["TransactionStatus"] : "";
            $this->ApprovalCode = isset($data["ApprovalCode"]) ? $data["ApprovalCode"] : "";
            $this->PreCheckoutTransactionId = isset($data["PreCheckoutTransactionId"]) ? $data["PreCheckoutTransactionId"] : "";
            $this->ExpressCheckoutIndicator = isset($data["ExpressCheckoutIndicator"]) ? $data["ExpressCheckoutIndicator"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
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
     * @param string $transaction_id the transaction Id.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {

        $this->TransactionId = $transaction_id;
        return $this;
    }

    /**
     * Gets consumer_key
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->ConsumerKey;
    }

    /**
     * Sets consumer_key
     * @param string $consumer_key the consumer key from checkout project.
     * @return $this
     */
    public function setConsumerKey($consumer_key)
    {

        $this->ConsumerKey = $consumer_key;
        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets currency
     * @param string $currency the currency for the transaction, for example, USD.
     * @return $this
     */
    public function setCurrency($currency)
    {

        $this->Currency = $currency;
        return $this;
    }

    /**
     * Gets order_amount
     * @return int
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }

    /**
     * Sets order_amount
     * @param int $order_amount the transaction order amount, for example, 1500 (for USD 15 transaction amount)
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {

        $this->OrderAmount = $order_amount;
        return $this;
    }

    /**
     * Gets purchase_date
     * @return string
     */
    public function getPurchaseDate()
    {
        return $this->PurchaseDate;
    }

    /**
     * Sets purchase_date
     * @param string $purchase_date the date of purchase.
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {

        $this->PurchaseDate = $purchase_date;
        return $this;
    }

    /**
     * Gets transaction_status
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->TransactionStatus;
    }

    /**
     * Sets transaction_status
     * @param string $transaction_status the status of transaction. Valid values are, SUCCESS: For approved transaction and FAILURE: For declined transaction.
     * @return $this
     */
    public function setTransactionStatus($transaction_status)
    {
        $allowed_values = ["Success", "Failure"];
        if (!in_array($transaction_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'transaction_status', must be one of 'Success', 'Failure'");
        }
        $this->TransactionStatus = $transaction_status;
        return $this;
    }

    /**
     * Gets approval_code
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }

    /**
     * Sets approval_code
     * @param string $approval_code the six-digit approval code returned by payment API.
     * @return $this
     */
    public function setApprovalCode($approval_code)
    {

        $this->ApprovalCode = $approval_code;
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
     * @param string $pre_checkout_transaction_id the precheckout transaction id element of the PrecheckoutData.(This is not required for Standard Checkout)
     * @return $this
     */
    public function setPreCheckoutTransactionId($pre_checkout_transaction_id)
    {

        $this->PreCheckoutTransactionId = $pre_checkout_transaction_id;
        return $this;
    }

    /**
     * Gets express_checkout_indicator
     * @return bool
     */
    public function getExpressCheckoutIndicator()
    {
        return $this->ExpressCheckoutIndicator;
    }

    /**
     * Sets express_checkout_indicator
     * @param bool $express_checkout_indicator the express checkout indicator. Set to true for express checkout
     * @return $this
     */
    public function setExpressCheckoutIndicator($express_checkout_indicator)
    {

        $this->ExpressCheckoutIndicator = $express_checkout_indicator;
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

