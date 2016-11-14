<?php

namespace Dnetix\MasterPass\Interceptor;

/**
 * Interceptor for to set SDK tracking information in each request header.
 * @package  MasterCardCoreSDK
 * @subpackage  Interceptor
 *
 */

class MasterCardAPITrackerInterceptor
{

    /*
    * @const API Call Tracker value
    */
    const API_CALL_TRACKER = "API-Call-Tracker";

    /*
    *@const Error Msg for API-Call-Tracker or User-Agent header null value
    */
    const ERR_MSG_NULL_HEADR = "Found null value for API-Call-Tracker or User-Agent header!";/*
	
	
	*@const Error Msg for API Tracker service not set
	*/
    const ERR_MSG_NULL_SERVICE = "Found API tracker service is not implemented!";

    /*
    * @const User Agent Value
    */
    const USER_AGENT = "User-Agent";

    private $apiTrackerService;

    /**
     * Constructor, sets the implemented api tracker.
     *
     * @param apiTracker    the implemented APITracker reference.
     */
    public function __construct($tracker)
    {
        $this->apiTrackerService = $tracker;
        $this->logger = Logger::getLogger(basename(__FILE__));
    }

    /**
     * Adds API tracking and user agent headers & returns to Api Client
     * @return api tracking info headers
     */

    public function intercept()
    {
        $headers = '';
        $trackingHeadrValue = '';
        $apiTrackerHeader = '';
        $cliT = $this->apiTrackerService;
        $clientTracker = $cliT->getAPITrackingHeader();
        $trackingHeadrValue .= ApiTracker::getAPITrackingHeader();

        if (empty($clientTracker) || empty($trackingHeadrValue)) {
            throw new SDKValidationException(MasterCardAPITrackerInterceptor::ERR_MSG_NULL_HEADR);
        }

        $apiTrackerHeader = $trackingHeadrValue . "," . $clientTracker;
        $headers[MasterCardAPITrackerInterceptor::API_CALL_TRACKER] = $apiTrackerHeader;
        $headers[MasterCardAPITrackerInterceptor::USER_AGENT] = $cliT->getUserAgentHeader();

        return $headers;
    }

}

?>