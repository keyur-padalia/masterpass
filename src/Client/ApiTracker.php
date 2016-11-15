<?php

namespace Dnetix\MasterPass\Client;
use Dnetix\MasterPass\baseSdkVersion;
use Dnetix\MasterPass\Interfaces\IApiTracker;

/**
 * Log API tracking information for request and access token api.
 */
class ApiTracker implements IApiTracker
{
    const BASE_SDK_VERSION = 'base_sdk_version=';

    public function getAPITrackingHeader()
    {
        $baseSdkVer = baseSdkVersion::baseVersion;
        return ApiTracker::BASE_SDK_VERSION . $baseSdkVer;
    }

    public function getUserAgentHeader()
    {
        return "MC Open API OAuth Framework v1.0-PHP";
    }
}
