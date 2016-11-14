<?php
/**  
 * Set all required request parameters and pass it to the API client.
 * @package  MasterCardCoreSDK
 * @subpackage  Helper
 * class ServiceRequest
 */
class ServiceRequest {

	private $headers;
	private $pathParams;
	private $queryParams;
	private $bodyParams;
	private $contentType;

	/**
	 * Gets the request headers array.
	 * 
	 * @return the request header array.
	 */
	public function getHeaders() {
		return $this->headers;
	}

	/**
	 * Gets the path params array.
	 * 
	 * @return	the path params array.
	 */
	public function getPathParams() {
		return $this->pathParams;
	}

	public function header($key, $value) {
		$this->headers[$key] = $value;
	}

	/**
	 * Sets the path param array.
	 * 
	 * @param key	the path param key.
	 * @param value	the path param value.
	 * @return		the path param array.
	 */
	public function pathParam($key, $value) {
		$this->pathParams[$key] =  $value;
	}

	/**
	 * Gets the query param array.
	 * 
	 * @return	the query param array.
	 */
	public function getQueryParams() {
		return $this->queryParams;
	}

	/**
	 * Sets the query param array.
	 * 
	 * @param queryParams the query param array.
	 */
	public function setQueryParams($queryParams) {
		$this->queryParams = $queryParams;
	}

	/**
	 * Gets the request body.
	 * 
	 * @return	the request body.
	 */
	public function getRequestBody() {
		return $this->bodyParams;
	}

	/**
	 * Sets the request body.
	 * 
	 * @param requestBody	the request body.
	 * @return				the request body.
	 */
	public function requestBody($bodyParams) {
		if(!empty($bodyParams))
		{
		$this->bodyParams = $bodyParams;
		return $this->bodyParams;
		}
	}

	/**
	 * Gets the request content type.
	 * 
	 * @return	the request content type.
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Sets the request content type.
	 * 
	 * @param contentType	the request content type.
	 * @return				the request content type.
	 */
	public function contentType($contentType) {
		$this->contentType = $contentType;
	}

}
?>