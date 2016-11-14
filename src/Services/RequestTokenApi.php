<?php
/**
 * Invokes RequestTokenApi
 * @package  MasterCardCoreSDK 
 * @subpackage  Services 
 */
 class RequestTokenApi {
	
	
	/**
	 * <p>
	 * This api call used to get the request token.This must be executed when a
	 * consumer clicks Buy with MasterPass or Connect with MasterPass buttons on
	 * your site/app.
	 * </p>
	 * 
	 * @param oauthCallbackURL	the oauth callback URL.
	 * @param config 		config object holds data as consumerkey, private key as per user
	 * @return					the RequestTokenResponse.
	 */
	 
	public static function create($oauthCallbackURL, $configName = NULL ){

        $path = "/oauth/consumer/v1/request_token";
        
        $serviceRequest = new ServiceRequest();
        
        $serviceRequest->header("oauth_callback", $oauthCallbackURL);
        $serviceRequest->contentType("application/xml");
        
        $apiClient = new ApiClient($configName);
  		$apiClient->setApiTracker(new APITrackerImpl());
		$apiClient->sdkErrorHandler = new MasterpassErrorHandler();
        
        return $apiClient->call($path, $serviceRequest,"POST","RequestTokenResponse");
    }
}
?>