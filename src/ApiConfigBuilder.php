<?php 
/**
 * Set environment details require to call mastercard api.
 * @package  MasterCardCoreSDK 
 *
 */
class ApiConfigBuilder {
	
	public $hostUrl;
	public $envName;
	public $consumerKey;
	public $privateKey;
	const ERR_MISSING_DATA = "Missing Required Data ";
	
	/**
	 * Set the environment name. 
	 * @param name		the environment name. e.g. SANDBOX
	 * @return			the environment name.
	 */
	public function setEnvName($envName) {
        $this->envName = $envName;
    }
	
	/**
	 * Set the environment host url.
	 * 
	 * @param hostUrl	the environment host url. e.g. sandbox - "https://sandbox.api.mastercard.com"
	 * @return			the environment host url. 
	 */
	public function setHostUrl($hostUrl) {
		
        $this->hostUrl = $hostUrl;
    }

	/**
	 * Set the consumer key generated from mastercard developer zone.
	 * 	  		
	 * @param consumerKey	the consumer key (Generated from mastercard developer zone).
	 * @return				the consumer key.
	 */
	public function setConsumerKey($consumerKey) {
		$this->consumerKey = $consumerKey;
	}

	/**
	 * Set the privateKey 		 
	 * @param privateKey	the private key, to be fetched from the certificate.
	 * @return	the
	 */
	public function setPrivateKey($privateKey) {
		$this->privateKey = $privateKey;
	}

	/**
	 * Build and register the ApiConfig object
	 * 
	 * @return	the apiconfig object with all details.
	 */
	public function build() {
		$config = new ApiConfig($this->envName,$this->hostUrl, $this->consumerKey, $this->privateKey);
		MasterCardApiConfig::registerConfig($config);
		return $config;
	}
}?>