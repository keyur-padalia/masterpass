<?php


include_once '../lib/mastercard_masterpass_merchant/api/ShoppingCartApi.php';
include_once '../MasterCardCoreSDK/MasterCardApiConfig.php';

include_once "../MasterCardCoreSDK/model/RequestTokenResponse.php";
include_once "../MasterCardCoreSDK/Services/RequestTokenApi.php";

include_once "../guzzle.phar";
include_once "../logger/Logger.php";
Logger::configure("../config.xml");

class ShoppingCartServiceApiTest extends PHPUnit_Framework_TestCase
{


    public function testShoppingCartServiceApi()
    {

        $consumerKey = "cLb0tKkEJhGTITp_6ltDIibO5Wgbx4rIldeXM_jRd4b0476c!414f4859446c4a366c726a327474695545332b353049303d";
        $hostUrl = "https://sandbox.api.mastercard.com";
        $masterPassData = ['keystorePath' => '../MasterCardCoreSDK/resources/Certs/SandboxMCOpenAPI.p12', 'keystorePassword' => 'changeit'];
        $thispath = $masterPassData['keystorePath'];
        $path = realpath($thispath);
        $keystore = [];
        $pkcs12 = file_get_contents($path);
        trim(openssl_pkcs12_read($pkcs12, $keystore, $masterPassData['keystorePassword']));

        MasterCardApiConfig::$consumerKey = $consumerKey;
        MasterCardApiConfig::$privateKey = $keystore['pkey'];
        MasterCardApiConfig::setSandBox(true);

        $response = RequestTokenApi::create("http://localhost");

        $obj = new ShoppingCartApi();

        // Creating shopping cart item object
        $objCartRequest = new ShoppingCartRequest(
            [
                'OAuthToken' => $response->OauthToken,
                'OriginUrl' => 'http://localhost:81/abc',
                'ShoppingCart' => new ShoppingCart
                (
                    [
                        'CurrencyCode' => 'USD',
                        'Subtotal' => '2499',
                        'ShoppingCartItem' => [new ShoppingCartItem(
                            [
                                'Description' => htmlentities('XBøx 360©°'),
                                'Quantity' => 1,
                                'Value' => 499,
                                'ImageURL' => 'http://localhost:81/images/xbox.jpg',
                                'ExtensionPoint' => "test",
                            ]

                        ), new ShoppingCartItem(
                            [
                                'Description' => 'xbdfhfdhghdox test',
                                'Quantity' => 1,
                                'Value' => 899,
                                'ImageURL' => 'http://localhost:81/images/xbox.jpg',
                                'ExtensionPoint' => "test",
                            ]
                        )],
                        'ExtensionPoint' => "test",
                    ]
                ),
                'ExtensionPoint' => "test",
            ]
        );

        try {
            $response = ShoppingCartApi::create($objCartRequest);
        } catch (SDKErrorResponseException $e) {
            $errors = $e->errors;
            foreach ($errors as $error) {
                echo "<br/>Description: " . $error->Description;
                echo "<br/>ReasonCode: " . $error->ReasonCode;
                echo "<br/>Source: " . $error->Source;
                echo "<br/>Response Code " . $e->code;
                echo "<br/>";
            }
        } catch (SDKValidationException $e) {
            echo $e->getMessage();
        }

        $this->assertNotNull($response);


    }
}

?>