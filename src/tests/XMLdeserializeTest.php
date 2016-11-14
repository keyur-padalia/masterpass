<?php 

include_once '../lib/mastercard_masterpass_merchant/api/ShoppingCartApi.php';
include_once "../MasterCardCoreSDK/model/Error.php";
include_once "../MasterCardCoreSDK/model/Errors.php";
include_once '../MasterCardCoreSDK/Converters/SDKConverterFactory.php';

include_once "../logger/Logger.php";
Logger::configure("../config.xml"); 

class XMLdeserializeTest extends PHPUnit_Framework_TestCase  {

	public function testxmlRequest() {

		$request = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><ShoppingCartResponse><OAuthToken>b1f9f52910f2d6f8fe6e9af5217a417f64f5a66a</OAuthToken></ShoppingCartResponse>';
		
		$str = "b1f9f52910f2d6f8fe6e9af5217a417f64f5a66a";
		$converter = SDKConverterFactory::getConverter("XML");
		$responseObj = $converter->responseBodyConverter($request,"ShoppingCartResponse");
		
		$this->assertEquals($str, $responseObj->OAuthToken);
		// $this->assertXmlStringEqualsXmlString($request,$errorRequestXML);
		
	}

}
?>