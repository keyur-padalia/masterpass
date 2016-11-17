<?php

namespace Dnetix\MasterPass\Services;
use Dnetix\MasterPass\Client\ApiClient;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\MasterpassErrorHandler;
use Dnetix\MasterPass\Helper\ServiceRequest;
use Dnetix\MasterPass\Model\ShoppingCartRequest;
use Dnetix\MasterPass\Model\ShoppingCartResponse;

/**
 * ShoppingCartApi Class
 */
class ShoppingCartApi
{

    /**
     * ShoppingCart service
     * This service used to enables shopping cart data to be displayed to users as they proceed through the MasterPass login and checkout.Merchants must call the Shopping Cart service before invoking the MasterPass UI for checkout.
     * @param ShoppingCartRequest $shopping_cart_request
     * @param null $config
     * @return ShoppingCartResponse
     */
    public static function create(ShoppingCartRequest $shopping_cart_request, $config = null)
    {

        $path = "/masterpass/v6/shopping-cart";

        $serviceRequest = new ServiceRequest();

        $serviceRequest->requestBody($shopping_cart_request);

        $serviceRequest->contentType("application/xml");

        $apiClient = new ApiClient($config);
        $apiClient->setApiTracker(new ApiTracker());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

        $response = (array) $apiClient->call($path, $serviceRequest, "POST", "ShoppingCartResponse");

        if (isset($response['OAuthToken'])) {
            return new ShoppingCartResponse($response);
        }

        return null;
    }

}

