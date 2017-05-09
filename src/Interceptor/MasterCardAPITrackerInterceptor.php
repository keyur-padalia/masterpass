<?php

namespace Dnetix\MasterPass\Interceptor;
use Dnetix\MasterPass\Client\ApiTracker;
use Dnetix\MasterPass\Exception\SDKValidationException;
use Dnetix\MasterPass\Helper\Logger;

/**
 * Interceptor for to set SDK tracking information in each request header.
 * @package  MasterCardCoreSDK
 * @subpackage  Interceptor
 *
 */

class MasterCardAPITrackerInterceptor
{

    const API_CALL_TRACKER = "API-Call-Tracker";
    const ERR_MSG_NULL_HEADR = "Found null value for API-Call-Tracker or User-Agent header!";
    const ERR_MSG_NULL_SERVICE = "Found API tracker service is not implemented!";
    const USER_AGENT = "User-Agent";

    /**
     * @var ApiTracker
     */
    private $apiTrackerService;

    public function __construct($tracker)
    {
        $this->apiTrackerService = $tracker;
        $this->logger = Logger::getLogger(basename(__FILE__));
    }

    public function intercept()
    {
        $headers = array();
        $trackingHeaderValue = '';
        $cliT = $this->apiTrackerService;
        $clientTracker = $cliT->getAPITrackingHeader();

        $trackingHeaderValue .= (new ApiTracker())->getAPITrackingHeader();

        if (empty($clientTracker) || empty($trackingHeaderValue)) {
            throw new SDKValidationException(MasterCardAPITrackerInterceptor::ERR_MSG_NULL_HEADR);
        }

        $apiTrackerHeader = $trackingHeaderValue . "," . $clientTracker;
        $headers[MasterCardAPITrackerInterceptor::API_CALL_TRACKER] = $apiTrackerHeader;
        $headers[MasterCardAPITrackerInterceptor::USER_AGENT] = $cliT->getUserAgentHeader();

        return $headers;
    }

}
