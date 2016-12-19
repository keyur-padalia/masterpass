<?php

namespace Dnetix\MasterPass;

use Dnetix\MasterPass\Model\AccessTokenResponse;
use Dnetix\MasterPass\Model\Checkout;
use Dnetix\MasterPass\Model\MerchantInitializationRequest;
use Dnetix\MasterPass\Model\MerchantInitializationResponse;
use Dnetix\MasterPass\Model\RequestTokenResponse;
use Dnetix\MasterPass\Model\ShoppingCartRequest;
use Dnetix\MasterPass\Model\ShoppingCartResponse;
use Dnetix\MasterPass\Services\AccessTokenApi;
use Dnetix\MasterPass\Services\CheckoutApi;
use Dnetix\MasterPass\Services\MerchantInitializationApi;
use Dnetix\MasterPass\Services\RequestTokenApi;
use Dnetix\MasterPass\Services\ShoppingCartApi;

class MasterPassApi
{

    /**
     * Request a new oauth token in order to use later on
     * @param string $callbackUrl
     * @return RequestTokenResponse
     */
    public function requestToken($callbackUrl)
    {
        return RequestTokenApi::create($callbackUrl);
    }

    /**
     * @param ShoppingCartRequest|array $request
     * @return ShoppingCartResponse
     */
    public function shoppingCart($request = null)
    {
        return ShoppingCartApi::create($request);
    }

    /**
     * @param MerchantInitializationRequest|array $request
     * @return MerchantInitializationResponse
     */
    public function merchantInitialization($request)
    {
        return MerchantInitializationApi::create($request);
    }

    /**
     * Receives the values from the checkout information and retrieves a token to show the information
     * @param string $requestToken
     * @param string $verifierToken
     * @return AccessTokenResponse
     */
    public function accessToken($requestToken, $verifierToken)
    {
        return AccessTokenApi::create($requestToken, $verifierToken);
    }

    /**
     * @param string $checkoutUrl
     * @param string $accessToken
     * @return Checkout
     */
    public function retrieveInformation($checkoutUrl, $accessToken)
    {
        if (!preg_match('/\/(\d+)$/', $checkoutUrl, $matches))
            return null;

        $checkoutId = $matches[1];

        return CheckoutApi::show($checkoutId, $accessToken);
    }

    public function buttonImageUrl()
    {
        return MasterCardApiConfig::buttonUrl();
    }

    public function scriptUrl()
    {
        return MasterCardApiConfig::scriptUrl();
    }

}


