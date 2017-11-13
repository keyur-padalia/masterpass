# Masterpass SDK Refactored Library

With this code you will be able to quickly connect with the Masterpass service.

## Installation

Using composer from your project

```
composer require dnetix/masterpass
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
`$consumerKey` it's a string copied from the "Project Keys" section of the Mastercard Developers project

`$privateKey` There is a full paragraph explaining this at the end of this README


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

### Obtaining the private key

When you create a project you receive a p12 file, or, if you lose it, you can renew it, in order to obtain the private key from this file you need to obtain it with php, so with the command line just put yourself in the directory where the key is and follow the commands

```sh
php -a
```
Once in interactive mode
```php
$keystore = [];
trim(openssl_pkcs12_read(file_get_contents(__DIR__ . '/NAME_OF_THE_P12_FILE.p12'), $keystore, 'THE_PASSWORD_OF_THE_P12'));
echo base64_encode($keystore['pkey']);
```
This will dump a lot of characters, copy all of them and provide them to the privateKey variable decoded

```php
$privateKey = base64_decode('THE_TOTAL_CHARACTERS_OBTAINED');
```
