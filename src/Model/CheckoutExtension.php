<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains methods require to set checkout details during DSRP.
 */
class CheckoutExtension
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    static $attributeMap = [
        'CardVerificationStatus' => 'CardVerificationStatus',
        'LoginAuthenticationMethod' => 'LoginAuthenticationMethod',
        'RiskDecisioning' => 'RiskDecisioning',
        'DSRP' => 'CheckoutDSRP',
        'PrivateDatas' => 'PrivateDatas',
        'InstallmentOption' => 'InstallmentOption',
        'Tokenization' => 'Tokenization',
        'PaymentAccountReference' => 'PaymentAccountReference',
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
        'card_verification_status' => 'setCardVerificationStatus',
        'login_authentication_method' => 'setLoginAuthenticationMethod',
        'risk_decisioning' => 'setRiskDecisioning',
        'dsrp' => 'setDsrp',
        'private_datas' => 'setPrivateDatas',
        'installment_option' => 'setInstallmentOption',
        'tokenization' => 'setTokenization',
        'payment_account_reference' => 'setPaymentAccountReference',
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
        'card_verification_status' => 'getCardVerificationStatus',
        'login_authentication_method' => 'getLoginAuthenticationMethod',
        'risk_decisioning' => 'getRiskDecisioning',
        'dsrp' => 'getDsrp',
        'private_datas' => 'getPrivateDatas',
        'installment_option' => 'getInstallmentOption',
        'tokenization' => 'getTokenization',
        'payment_account_reference' => 'getPaymentAccountReference',
        'extension_point' => 'getExtensionPoint',
    ];

    static function getters()
    {
        return self::$getters;
    }


    /**
     * $card_verification_status the card verification status.
     * @var string
     */
    public $CardVerificationStatus;

    /**
     * $login_authentication_method the login authentication method.
     * @var string
     */
    public $LoginAuthenticationMethod;

    /**
     * $risk_decisioning the risk decisioning data.
     * @var RiskDecisioning
     */
    public $RiskDecisioning;

    /**
     * $dsrp the DSRP data.
     * @var CheckoutDSRP
     */
    public $DSRP;

    /**
     * $private_datas the private data details.
     * @var PrivateDatas
     */
    public $PrivateDatas;

    /**
     * $installment_option the installment options details.
     * @var InstallmentOption
     */
    public $InstallmentOption;

    /**
     * $tokenization the token details.
     * @var Tokenization
     */
    public $Tokenization;

    /**
     * $payment_account_reference the payment account reference.
     * @var string
     */
    public $PaymentAccountReference;

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
            $this->CardVerificationStatus = isset($data["CardVerificationStatus"]) ? $data["CardVerificationStatus"] : "";
            $this->LoginAuthenticationMethod = isset($data["LoginAuthenticationMethod"]) ? $data["LoginAuthenticationMethod"] : "";
            $this->RiskDecisioning = isset($data["RiskDecisioning"]) ? $data["RiskDecisioning"] : "";
            $this->DSRP = isset($data["DSRP"]) ? $data["DSRP"] : "";
            $this->PrivateDatas = isset($data["PrivateDatas"]) ? $data["PrivateDatas"] : "";
            $this->InstallmentOption = isset($data["InstallmentOption"]) ? $data["InstallmentOption"] : "";
            $this->Tokenization = isset($data["Tokenization"]) ? $data["Tokenization"] : "";
            $this->PaymentAccountReference = isset($data["PaymentAccountReference"]) ? $data["PaymentAccountReference"] : "";
            $this->ExtensionPoint = isset($data["ExtensionPoint"]) ? $data["ExtensionPoint"] : "";
        }
    }

    /**
     * Gets card_verification_status
     * @return string
     */
    public function getCardVerificationStatus()
    {
        return $this->CardVerificationStatus;
    }

    /**
     * Sets card_verification_status
     * @param string $card_verification_status the card verification status.
     * @return $this
     */
    public function setCardVerificationStatus($card_verification_status)
    {

        $this->CardVerificationStatus = $card_verification_status;
        return $this;
    }

    /**
     * Gets login_authentication_method
     * @return string
     */
    public function getLoginAuthenticationMethod()
    {
        return $this->LoginAuthenticationMethod;
    }

    /**
     * Sets login_authentication_method
     * @param string $login_authentication_method the login authentication method.
     * @return $this
     */
    public function setLoginAuthenticationMethod($login_authentication_method)
    {

        $this->LoginAuthenticationMethod = $login_authentication_method;
        return $this;
    }

    /**
     * Gets risk_decisioning
     * @return RiskDecisioning
     */
    public function getRiskDecisioning()
    {
        return $this->RiskDecisioning;
    }

    /**
     * Sets risk_decisioning
     * @param RiskDecisioning $risk_decisioning the risk decisioning data.
     * @return $this
     */
    public function setRiskDecisioning($risk_decisioning)
    {

        $this->RiskDecisioning = $risk_decisioning;
        return $this;
    }

    /**
     * Gets dsrp
     * @return CheckoutDSRP
     */
    public function getDsrp()
    {
        return $this->DSRP;
    }

    /**
     * Sets dsrp
     * @param CheckoutDSRP $dsrp the DSRP data.
     * @return $this
     */
    public function setDsrp($dsrp)
    {

        $this->DSRP = $dsrp;
        return $this;
    }

    /**
     * Gets private_datas
     * @return PrivateDatas
     */
    public function getPrivateDatas()
    {
        return $this->PrivateDatas;
    }

    /**
     * Sets private_datas
     * @param PrivateDatas $private_datas the private data details.
     * @return $this
     */
    public function setPrivateDatas($private_datas)
    {

        $this->PrivateDatas = $private_datas;
        return $this;
    }

    /**
     * Gets installment_option
     * @return InstallmentOption
     */
    public function getInstallmentOption()
    {
        return $this->InstallmentOption;
    }

    /**
     * Sets installment_option
     * @param InstallmentOption $installment_option the installment options details.
     * @return $this
     */
    public function setInstallmentOption($installment_option)
    {

        $this->InstallmentOption = $installment_option;
        return $this;
    }

    /**
     * Gets tokenization
     * @return Tokenization
     */
    public function getTokenization()
    {
        return $this->Tokenization;
    }

    /**
     * Sets tokenization
     * @param Tokenization $tokenization the token details.
     * @return $this
     */
    public function setTokenization($tokenization)
    {

        $this->Tokenization = $tokenization;
        return $this;
    }

    /**
     * Gets payment_account_reference
     * @return string
     */
    public function getPaymentAccountReference()
    {
        return $this->PaymentAccountReference;
    }

    /**
     * Sets payment_account_reference
     * @param string $payment_account_reference the payment account reference.
     * @return $this
     */
    public function setPaymentAccountReference($payment_account_reference)
    {

        $this->PaymentAccountReference = $payment_account_reference;
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

