<?php

use Dnetix\MasterPass\Converters\SDKConverterFactory;

class XMLDeserializeTest extends BaseTestCase
{

    public function testXmlRequest()
    {

        $request = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><ShoppingCartResponse><OAuthToken>b1f9f52910f2d6f8fe6e9af5217a417f64f5a66a</OAuthToken></ShoppingCartResponse>';

        $str = "b1f9f52910f2d6f8fe6e9af5217a417f64f5a66a";
        $converter = SDKConverterFactory::getConverter("XML");
        $responseObj = $converter->responseBodyConverter($request, "ShoppingCartResponse");

        $this->assertEquals($str, $responseObj->OAuthToken);
        // $this->assertXmlStringEqualsXmlString($request,$errorRequestXML);
    }

}
