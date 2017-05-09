<?php

namespace Dnetix\MasterPass\Interfaces;

/**
 * Interface to monitor different header tracking information.
 * All API implementations should implement this class to track api call and user
 * agent information. The API tracking method provides details of base and
 * client implementation version along with language version and details. And
 * the user agent header values is fixed as per the MAsterCard. These both
 * headers will be get passed in each request and will be used for internal
 * tracking purpose only.
 */
interface IApiTracker
{
    /**
     * Get tracking info to be used in api tracker header
     */
    public function getAPITrackingHeader();


    /**
     * Get user agent info to be used in api tracker header
     */
    public function getUserAgentHeader();
}
