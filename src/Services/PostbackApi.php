<?php

namespace Dnetix\MasterPass\Services;

use Dnetix\MasterPass\Client\ApiClient;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\MasterpassErrorHandler;
use Dnetix\MasterPass\Helper\ServiceRequest;
use Dnetix\MasterPass\Model\MerchantTransactions;

class PostbackApi
{

    /**
     * Postback Service
     * This is the final step of MasterPass transaction. MasterPass transaction is a service call from the merchant to MasterPass,communicating the result of the transaction (success or failure). This is a mandatory step. Abandoned transactions do not need to be reported. The &lt;TransactionId&gt; value should be the value from the &lt;TransactionId&gt; element of the Checkout XML returned in the Checkout request.
     */
    public static function create(MerchantTransactions $merchant_transactions, $config = null)
    {

        $path = "/masterpass/v6/transaction";

        $serviceRequest = new ServiceRequest();

        $serviceRequest->requestBody($merchant_transactions);
        $serviceRequest->contentType("application/xml");

        $apiClient = new ApiClient($config);
        $apiClient->setApiTracker(new ApiTracker());
        $apiClient->sdkErrorHandler = new MasterpassErrorHandler();

        $response = (array) $apiClient->call($path, $serviceRequest, "POST", "MerchantTransactions");

        if ($response) {
            return new MerchantTransactions($response);
        }

        return null;
    }

}

