<?php


include_once '../MasterCardCoreSDK/MasterCardApiConfig.php';

include_once "../MasterCardCoreSDK/model/RequestTokenResponse.php";
include_once "../MasterCardCoreSDK/Services/RequestTokenApi.php";
include_once "../MasterCardCoreSDK/Services/AccessTokenApi.php";

include_once "../guzzle.phar";
include_once "../logger/Logger.php";
Logger::configure("../config.xml");


class RequestTokenServiceApiTest extends PHPUnit_Framework_TestCase
{

    public function testrequestTokenService()
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

        $response = RequestTokenApi::create("http://localhost:81");

        $this->assertNotEmpty($response);

    }

}

?>