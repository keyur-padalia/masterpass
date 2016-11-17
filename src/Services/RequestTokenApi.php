<?php

namespace Dnetix\MasterPass\Services;


use Dnetix\MasterPass\Client\ApiClient;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\MasterpassErrorHandler;
use Dnetix\MasterPass\Helper\ServiceRequest;
use Dnetix\MasterPass\Model\RequestTokenResponse;

/**
 * Invokes RequestTokenApi
 */
class RequestTokenApi
{

    /**
     * This api call used to get the request token.This must be executed when a
     * consumer clicks Buy with MasterPass or Connect with MasterPass buttons on
     * your site/app.
     * @param $oauthCallbackURL
     * @param null $configName
     * @return RequestTokenResponse
     */
    public static function create($oauthCallbackURL, $configName = null)
    {
        $path = "/oauth/consumer/v1/request_token";

        $serviceRequest = new ServiceRequest();

        $serviceRequest->header("oauth_callback", $oauthCallbackURL);
        $serviceRequest->contentType("application/json");

        $apiClient = new ApiClient($configName);
        $apiClient->setApiTracker(new ApiTracker());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

        return $apiClient->call($path, $serviceRequest, "POST", "RequestTokenResponse");
    }
}
