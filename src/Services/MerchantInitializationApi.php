<?php

namespace Dnetix\MasterPass\Services;

use Dnetix\MasterPass\Client\ApiClient;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\MasterpassErrorHandler;
use Dnetix\MasterPass\Helper\ServiceRequest;
use Dnetix\MasterPass\Model\MerchantInitializationRequest;
use Dnetix\MasterPass\Model\MerchantInitializationResponse;

/**
 * MerchantInitializationApi Class
 */
class MerchantInitializationApi
{

    /**
     * Merchant Initialization Service
     * This service is used to secure Lightbox connections between merchant and MasterPass. This service requires a request token (OAuthToken). This service call should be used when shopping cart service is not called, for example, pairing outside of checkout flow.
     * @param MerchantInitializationRequest $merchant_initialization_request
     * @param null $config
     * @return MerchantInitializationResponse
     */
    public static function create(MerchantInitializationRequest $merchant_initialization_request, $config = null)
    {

        $path = "/masterpass/v6/merchant-initialization";

        $serviceRequest = new ServiceRequest();


        $serviceRequest->requestBody($merchant_initialization_request);

        $serviceRequest->contentType("application/xml");

        $apiClient = new ApiClient($config);
        $apiClient->setApiTracker(new ApiTracker());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

        $response = (array)$apiClient->call($path, $serviceRequest, "POST", "MerchantInitializationResponse");

        if (isset($response['OAuthToken']))
            return new MerchantInitializationResponse($response);

        return null;
    }

}

