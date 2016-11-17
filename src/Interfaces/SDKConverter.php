<?php

namespace Dnetix\MasterPass\Interfaces;

use Dnetix\MasterPass\Exception\SDKConversionException;

/**
 * Interface to convert request and response as per the their content type.
 * All converts used for request and response conversion should implement this
 * interface. SDKConverterFactory should return specific converter as
 * SDKConverter interface reference.
 */
interface SDKConverter
{

    /**
     * Converts request body to string.
     * @param $object
     * @return
     */
    public function requestBodyConverter($object);

    /**
     * Converts encoded response object to the given response type.
     *
     * @throws SDKConversionException
     */
    public function responseBodyConverter($responseBody, $classtype);
}
