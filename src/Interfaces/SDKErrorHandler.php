<?php

/**
 * Interface to handle customized error response.
 * <p>
 * Every implemented api should implement this error handler to customize the
 * error response returned by the open api.
 * </p>
 * @package MasterCardCoreSDK
 * @subpackage Interfaces
 */
interface SDKErrorHandler {

	/**
	 * Return a custom exception to be thrown from ApiClient.
	 * 
	 * @param sdkErrorResponse	the SDKErrorResponse object.
	 * @return Throwable 		an exception which will be passed 
	 * 							to implemented error handler.  
	 */
	public function handleError($sdkErrorResponse);
	
}?>