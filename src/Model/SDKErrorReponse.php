<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class used to build custom error response object.
 * @package  MasterCardCoreSDK
 * @subpackage  model
 */
class SDKErrorResponse
{

    private $response = null;
    private $responseCode = 0;
    private $message;
    private $errorSource;

    /**
     * Constructs SDKErrorResponse with the specified error response code and
     * error response.
     *
     * @param responseCode    the error response code.
     * @param response        the error response.
     */
    public function SDKErrorResponse($response, $responseCode)
    {
        $this->responseCode = $responseCode;
        $this->response = $response;
    }

    /**
     * Gets the error response.
     *
     * @return    the error response.
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets the error response.
     *
     * @param response    the error response.
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Gets the error response code.
     *
     * @return    the error response code.
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Sets the error response code.
     * @param responseCode    the error response code.
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * Gets the error response message.
     *
     * @return    the error response message.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the error response message.
     *
     * @param message    the error response message.
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Gets the error source.
     *
     * @return    the error source.
     */
    public function getErrorSource()
    {
        return $this->errorSource;
    }

    /**
     * Sets the error source.
     *
     * @param errorSource    the error source.
     */
    public function setErrorSource($errorSource)
    {
        $this->errorSource = $errorSource;
    }

}

?>