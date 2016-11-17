<?php

namespace Dnetix\MasterPass\Helper;

/**
 * Set all required request parameters and pass it to the API client.
 */
class ServiceRequest
{

    private $headers;
    private $pathParams;
    private $queryParams;
    private $bodyParams;
    private $contentType;

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getPathParams()
    {
        return $this->pathParams;
    }

    public function header($key, $value)
    {
        $this->headers[$key] = $value;
    }

    public function pathParam($key, $value)
    {
        $this->pathParams[$key] = $value;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
    }

    public function getRequestBody()
    {
        return $this->bodyParams;
    }

    public function requestBody($bodyParams)
    {
        if (!empty($bodyParams)) {
            $this->bodyParams = $bodyParams;
            return $this->bodyParams;
        }
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function contentType($contentType)
    {
        $this->contentType = $contentType;
    }

}
