<?php

namespace Dnetix\MasterPass\Exception;


/**
 * Thrown when application get the error response from server.
 * SDK error handler check for the error response and throws the errors object.
 */
class SDKErrorResponseException extends SDKBaseException
{

    /* @param $errors | To get all errors info */
    public $errors;

    /* @param $code | Response code */
    public $code = 0;

    /**
     * Constructs SDKErrorResponseException with the specified error response
     * status code and details.
     */
    public function __construct($errors, $responseCode)
    {
        parent::__construct(serialize($errors));

        $this->errors = $errors;
        $this->code = $responseCode;
    }

    /**
     * Gets the error response details.
     */
    public function getErrorResponse()
    {
        return $this->errors;
    }

    /**
     * Gets the error response status code.
     */
    public function getStatCode()
    {
        return $this->code;
    }
}
