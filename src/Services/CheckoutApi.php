<?php

namespace Dnetix\MasterPass\Services;
use Dnetix\MasterPass\Client\ApiClient;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\MasterpassErrorHandler;
use Dnetix\MasterPass\Helper\ServiceRequest;
use Dnetix\MasterPass\Model\Checkout;

/**
 * CheckoutApi Class
 */
class CheckoutApi
{

    /**
     * This service is used to retrieve consumers payment, shipping address, reward and 3-D Secure information
     * from MasterPass.
     * The checkout resource URL supplied by MasterPass must be decoded and consumed by the merchant as provided
     * by MasterPass.
     * @param $pathid
     * @param $oauth_token
     * @param null $config
     * @return Checkout
     */
    public static function show($pathid, $oauth_token, $config = null)
    {

        $path = "/masterpass/v6/checkout/{pathid}";

        $serviceRequest = new ServiceRequest();
        $serviceRequest->pathParam("pathid", $pathid);
        $serviceRequest->header("oauth_token", $oauth_token);

        $serviceRequest->contentType("application/xml");

        $apiClient = new ApiClient($config);
        $apiClient->setApiTracker(new ApiTracker());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

        $response = (array)$apiClient->call($path, $serviceRequest, "GET", "Checkout");

        if (isset($response['Card']))
            return new Checkout($response);

        return null;
    }

}

