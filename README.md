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
```

And now you can use any of the services found on the folder "src/Services", in order to view the step to step on how to complete the whole process please refer to the examples
