<?php

namespace Dnetix\MasterPass\Exception;

/**
 * Thrown to indicate exceptions occurred during request/response conversion.
 * This exception class is used when any exception occurred during conversion of
 * request and response to the specified content type. All implemented converter
 * will throw SDKConversionException whenever exception occurs.
 */
class SDKConversionException extends SDKBaseException
{

    private $converterName;

    /**
     * Constructs SDKConversionException with the specified error message and converter name.
     */
    public function __construct($errorMessage, $converterName)
    {
        parent::__construct($errorMessage);
        $this->converterName = $converterName;
    }

    /**
     * Gets the converter name where conversion exception occurred.
     */
    public function getConverterName()
    {
        return $this->converterName;
    }

}
