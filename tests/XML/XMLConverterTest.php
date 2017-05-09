<?php

use Dnetix\MasterPass\Converters\SDKConverterFactory;
use Dnetix\MasterPass\Model\Errors;

class XMLConverterTest extends BaseTestCase
{

    public function testxmlRequest()
    {
        $request = '<?xml version="1.0" encoding="UTF-8"?><Errors><Error><Description>Callback value is null</Description><ReasonCode>MISSING_REQUIRED_INPUT</ReasonCode><Recoverable>0</Recoverable><Source>0</Source><Details>test details</Details><ExtensionPoint/></Error></Errors>';
        $error = new \Dnetix\MasterPass\Model\Error(
            [
                'Description' => "Callback value is null",
                'ReasonCode' => "MISSING_REQUIRED_INPUT",
                'Recoverable' => false,
                'Source' => 0,
                'Details' => "test details",
            ]
        );
        $errors = new Errors(["Error" => $error]);

        $converter = SDKConverterFactory::getConverter("XML");
        $errorRequestXML = $converter->requestBodyConverter($errors);

        $this->assertXmlStringEqualsXmlString($request, $errorRequestXML);
    }

}
