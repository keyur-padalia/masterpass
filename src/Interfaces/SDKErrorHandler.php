<?php

namespace Dnetix\MasterPass\Interfaces;
use Dnetix\MasterPass\Model\SDKErrorResponse;

/**
 * Interface to handle customized error response.
 * Every implemented api should implement this error handler to customize the
 * error response returned by the open api.
 */
interface SDKErrorHandler
{

    /**
     * Return a custom exception to be thrown from ApiClient.
     * @param SDKErrorResponse $sdkErrorResponse
     * @return
     */
    public function handleError($sdkErrorResponse);

}
