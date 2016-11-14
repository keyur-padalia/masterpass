<?php 


include_once "../MasterCardCoreSDK/model/Error.php";
include_once "../MasterCardCoreSDK/model/Errors.php";
include_once '../MasterCardCoreSDK/Converters/SDKConverterFactory.php';
 
include_once "../logger/Logger.php";
Logger::configure("../config.xml"); 

class XMLConverterTest extends PHPUnit_Framework_TestCase  {

	public function testxmlRequest() {

		$request = '<?xml version="1.0" encoding="UTF-8"?><Errors><Error><Description>Callback value is null</Description><ReasonCode>MISSING_REQUIRED_INPUT</ReasonCode><Recoverable>0</Recoverable><Source>0</Source><Details>test details</Details></Error></Errors>';

		$error = new Error(
			array(
			'Description' =>"Callback value is null",
			'ReasonCode' =>"MISSING_REQUIRED_INPUT",
			'Recoverable'=>false,
			'Source'=>0,
			'Details'=>"test details"
			)
		);

		$errors = new Errors(array("Error"=>$error));
	
		$converter = SDKConverterFactory::getConverter("XML");
		$errorRequestXML = $converter->requestBodyConverter($errors);

		$this->assertXmlStringEqualsXmlString($request,$errorRequestXML); 
		
	}

}
?>