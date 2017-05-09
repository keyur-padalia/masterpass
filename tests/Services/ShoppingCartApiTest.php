<?php


use Dnetix\MasterPass\Model\ShoppingCart;
use Dnetix\MasterPass\Model\ShoppingCartItem;
use Dnetix\MasterPass\Model\ShoppingCartRequest;

class ShoppingCartServiceApiTest extends BaseTestCase
{


    public function testShoppingCartServiceApi()
    {
        $client = $this->client();

        $token = $client->requestToken("http://localhost");

        $shoppingCartRequest = new ShoppingCartRequest([
            'ShoppingCart' => new ShoppingCart([
                'Subtotal' => 10000,
                'CurrencyCode' => 'COP',
                'ShoppingCartItem' => [
                    new ShoppingCartItem([
                        'ImageURL' => 'https://www.placetopay.com/images/providers/placetopay.full.png',
                        'Value' => 10000,
                        'Description' => 'Testing product',
                        'Quantity' => 1,
                    ]),
                ],
            ]),
            'OAuthToken' => $token->token(),
        ]);
        $shoppingCartResponse = $client->shoppingCart($shoppingCartRequest);

        $this->assertNotNull($shoppingCartResponse->getOAuthToken());
    }
}
