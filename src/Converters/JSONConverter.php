<?php


namespace Dnetix\MasterPass\Converters;

use Dnetix\MasterPass\Exception\SDKConversionException;
use Dnetix\MasterPass\Interfaces\SDKConverter;

class JSONConverter implements SDKConverter
{
    /**
     * Converts request body to string.
     * @param $object
     * @return
     */
    public function requestBodyConverter($object)
    {
    }

    /**
     * Converts encoded response object to the given response type.
     *
     * @throws SDKConversionException
     */
    public function responseBodyConverter($responseBody, $classtype)
    {
        // TODO: Implement responseBodyConverter() method.
    }
}
