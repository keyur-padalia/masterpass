# Masterpass SDK Refactored Library

With this code you will be able to quickly connect with the Masterpass service.

## Installation

Using composer from your project, because originally uses a PEAR XML library its required to install it

```
composer require dnetix/masterpass
sudo apt-get install php-pear
sudo pear update-channels
sudo pear install XML_Parser
```

Or If you just want to run the examples contained in this project run "composer install" to load the vendor autoload



## Usage

Begin setting the environment variables, those values can be obtained from the Masterpass merchant portal

```
MasterCardApiConfig::setConsumerKey($consumerKey);
MasterCardApiConfig::setPrivateKey($privateKey);
MasterCardApiConfig::setSandBox(true);

$client = \Dnetix\MasterPass\MasterPassApi();
```

That client can be used for all of the services required for the process

This is an example of the merchant initialization required in order to obtain the request token used on the lightbox, this is made on the backend, could be with an ajax call

```
$token = $client->requestToken('http://your_callback_url.com');
$shoppingCartRequest = new ShoppingCartRequest([
    'ShoppingCart' => new ShoppingCart([
        'Subtotal' => 10000,
        'CurrencyCode' => 'COP,
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

$initialization = new MerchantInitializationRequest([
    'OriginUrl' => 'http://your_callback_url.com',
    'OAuthToken' => $token->token(),
]);
$initializationResponse = $client->merchantInitialization($initialization);

$merchantCheckoutId = 'OBTAINED ON THE CLIENT ONBOARDING';
$requestToken = $token->token();
```

Once you get the merchantCheckoutId and the requestToken, pass it to your javascript initialization of the lightbox

```js
MasterPass.client.checkout({
    "requestToken": requestToken,
    "callbackUrl": 'http://your_callback_url.com',
    "failureCallback": console.log,
    "cancelCallback": masterpassCancelFunction,
    "successCallback": masterpassSuccessFunction,
    "merchantCheckoutId": merchantCheckoutId,
    "version": "v6",
    "suppressShippingAddressEnable": true
});
```

At that moment the lightbox will be launched and if it uses your successCallback that function needs to send the information to the backend could be another ajax call, or it could redirect to that callback Url so handle it properly

```
$accessTokenResponse = $client->accessToken($_REQUEST['oauth_token'], $_REQUEST['oauth_verifier']);
$checkoutData = $client->retrieveInformation($_REQUEST['checkout_resource_url'], $accessTokenResponse->token());

$creditCardNumber = $checkoutData->getCard()->accountNumber();
// Format 12/20 check the Dnetix\MasterPass\Model\Card to see other accessor
$expiration = $checkoutData->getCard()->expiration();
```
Now you can see the user's credit card information and access it and use it wisely.
