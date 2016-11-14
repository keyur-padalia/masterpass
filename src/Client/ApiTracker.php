<?php 
/**
 * @package  MasterCardCoreSDK
 * @subpackage Client
 * @category class ApiTracker
*/
/**
 * Log API tracking information for request and access token api.
 *
 */
class ApiTracker implements IApiTracker
	{
		/* @const Base sdk version */
		const BASE_SDK_VERSION='base_sdk_version=';

		/** Gets tracking info to be used in api tracker header
		* @method Gets tracking info to be used in api tracker header
		* @return base sdk version 
		*/
        public function getAPITrackingHeader()
        {
		  $baseSdkVer = '';
		  $baseSdkVer = baseSdkVersion::baseVersion;
		  return ApiTracker::BASE_SDK_VERSION.$baseSdkVer;
        }
		
		/** Gets user agent info to be used in api tracker header
		* @method Gets user agent info to be used in api tracker header
		* @return the user agent header value.
		*/
		public function getUserAgentHeader()
		{
		 	return "MC Open API OAuth Framework v1.0-PHP";
		}
	}
?>