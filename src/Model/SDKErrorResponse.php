<?php

namespace Dnetix\MasterPass\Model;
use GuzzleHttp\Psr7\Response;

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
     */
    public function __construct($response, $responseCode)
    {
        $this->responseCode = $responseCode;
        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getErrorSource()
    {
        return $this->errorSource;
    }

    public function setErrorSource($errorSource)
    {
        $this->errorSource = $errorSource;
    }

}
