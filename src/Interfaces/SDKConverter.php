<?php

namespace Dnetix\MasterPass\Interfaces;
    /**
     * @package MasterCardCoreSDK
     * @subpackage Interfaces
     */
/**
 * Interface to convert request and response as per the their content type.
 * <p>
 * All converts used for request and response conversion should implement this
 * interface. SDKConverterFactory should return specific converter as
 * SDKConverter interface reference.
 * </p>
 *
 */

interface SDKConverter
{

    /**
     * Converts request body to string.
     *
     * @param object                    the request body object.
     * @return                            the converted request body a string.
     * @throws SDKConversionException    If an exception occurred during request conversion.
     */
    public function requestBodyConverter($object);

    /**
     * Converts encoded response object to the given response type.
     *
     * @param responseBody                the response body of received response.
     * @param responseType                the response type to convert received response
     *                                    to specific response type.
     * @return                            the converted response body.
     * @throws SDKConversionException    If an exception occurred during response conversion.
     */
    public function responseBodyConverter($responseBody, $classtype);
}

?>