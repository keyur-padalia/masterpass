<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set installment details.
 */
class InstallmentOption
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'NumberOfInstallments' => 'NumberOfInstallments',
        'PricePerInstallment' => 'PricePerInstallment',
        'InterestRate' => 'InterestRate',
        'CurrencyCode' => 'CurrencyCode',
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
        'number_of_installments' => 'setNumberOfInstallments',
        'price_per_installment' => 'setPricePerInstallment',
        'interest_rate' => 'setInterestRate',
        'currency_code' => 'setCurrencyCode',
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
        'number_of_installments' => 'getNumberOfInstallments',
        'price_per_installment' => 'getPricePerInstallment',
        'interest_rate' => 'getInterestRate',
        'currency_code' => 'getCurrencyCode',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $number_of_installments the number of installments.
     * @var int
     */
    public $NumberOfInstallments;

    /**
     * $price_per_installment the price per installment.
     * @var int
     */
    public $PricePerInstallment;

    /**
     * $interest_rate the interest rate.
     * @var string
     */
    public $InterestRate;

    /**
     * $currency_code the currency code.
     * @var string
     */
    public $CurrencyCode;


    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {

        if ($data != null) {
            $this->NumberOfInstallments = isset($data["NumberOfInstallments"]) ? $data["NumberOfInstallments"] : "";
            $this->PricePerInstallment = isset($data["PricePerInstallment"]) ? $data["PricePerInstallment"] : "";
            $this->InterestRate = isset($data["InterestRate"]) ? $data["InterestRate"] : "";
            $this->CurrencyCode = isset($data["CurrencyCode"]) ? $data["CurrencyCode"] : "";
        }
    }

    /**
     * Gets number_of_installments
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->NumberOfInstallments;
    }

    /**
     * Sets number_of_installments
     * @param int $number_of_installments the number of installments.
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {

        $this->NumberOfInstallments = $number_of_installments;
        return $this;
    }

    /**
     * Gets price_per_installment
     * @return int
     */
    public function getPricePerInstallment()
    {
        return $this->PricePerInstallment;
    }

    /**
     * Sets price_per_installment
     * @param int $price_per_installment the price per installment.
     * @return $this
     */
    public function setPricePerInstallment($price_per_installment)
    {

        $this->PricePerInstallment = $price_per_installment;
        return $this;
    }

    /**
     * Gets interest_rate
     * @return string
     */
    public function getInterestRate()
    {
        return $this->InterestRate;
    }

    /**
     * Sets interest_rate
     * @param string $interest_rate the interest rate.
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {

        $this->InterestRate = $interest_rate;
        return $this;
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets currency_code
     * @param string $currency_code the currency code.
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->CurrencyCode = $currency_code;
        return $this;
    }

}

