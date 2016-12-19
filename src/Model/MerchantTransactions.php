<?php

namespace Dnetix\MasterPass\Model;


/**
 * MerchantTransactions
 */
class MerchantTransactions
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'MerchantTransactions' => 'MerchantTransaction',
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
        'merchant_transactions' => 'setMerchantTransactions',
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
        'merchant_transactions' => 'getMerchantTransactions',
    ];

    static function getters()
    {
        return self::$getters;
    }

    /**
     * $merchant_transactions the merchant transaction details.
     * @var MerchantTransaction[]
     */
    public $MerchantTransactions = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $transactions = isset($data["MerchantTransactions"]) ? $data["MerchantTransactions"] : null;

            if (is_array($transactions)) {
                foreach ($transactions as $transaction) {
                    $this->MerchantTransactions[] = $this->parseMerchantTransaction($transaction);
                }
            } else {
                $this->MerchantTransactions[] = $this->parseMerchantTransaction($transactions);
            }
        }
    }

    public function parseMerchantTransaction($data)
    {
        if (!($data instanceof MerchantTransaction)) {
            $data = new MerchantTransaction((array) $data);
        }
        return $data;
    }

    /**
     * Gets merchant_transactions
     * @return MerchantTransaction[]
     */
    public function getMerchantTransactions()
    {
        return $this->MerchantTransactions;
    }

    /**
     * Sets merchant_transactions
     * @param MerchantTransaction[] $merchant_transactions the merchant transaction details.
     * @return $this
     */
    public function setMerchantTransactions($merchant_transactions)
    {

        $this->MerchantTransactions = $merchant_transactions;
        return $this;
    }

}

