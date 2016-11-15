<?php

namespace Dnetix\MasterPass\Services;

/**
 * Invokes AccessTokenApi.
 */
class AccessTokenApi
{
    /**
     * <p>
     * This api call is used to exchange a request token for a long access token
     * from the MasterPass service. For Pairing during checkout, this service
     * will need to be called twice: 1. To request the checkout access token, which
     * is used to retrieve checkout data 2. To request the long access token,
     * which is used to retrieve precheckout data You will need the Request
     * Token (oauth_token) and Verifier (oauth_verifier) from the merchant
     * callback to get an access token.
     * </p>
     *
     * @param oauthToken    the oauth token.
     * @param oauthVerifier the ouath verifier.
     * @param config        config object holds data as consumerkey, private key as per user
     * @return                the AccessTokenResponse.
     */

    public static function create($oauthToken, $oauthVerifier, $configName = null)
    {
        $path = "/oauth/consumer/v1/access_token";

        $serviceRequest = new ServiceRequest();

        $serviceRequest->header("oauth_verifier", $oauthVerifier);
        $serviceRequest->header("oauth_token", $oauthToken);
        $serviceRequest->contentType("application/xml");

        $apiClient = new ApiClient($configName);
        $apiClient->setApiTracker(new APITrackerImpl());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();
        return $apiClient->call($path, $serviceRequest, "POST", "AccessTokenResponse");

    }
}

?>