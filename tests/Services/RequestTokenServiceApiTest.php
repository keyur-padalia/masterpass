<?php

class RequestTokenServiceApiTest extends BaseTestCase
{

    public function testRequestTokenService()
    {
        $client = $this->client();

        $response = $client->requestToken("http://localhost:81");

        $this->assertNotEmpty($response->token());
    }

}
