<?php 



/**
 * Thrown when application get the error response from server.
 * SDK error handler check for the error response and throws the errors object. 
 * 
 * @package  MasterCardCoreSDK
 * @subpackage  Exception
 * @class SDKErrorResponseException
 * @extends SDKBaseException
 */
class SDKErrorResponseException extends SDKBaseException {

	/* @param $errors | To get all errors info */
	public $errors;
	
	/* @param $code | Response code */
	public $code = 0;
	
	/**
	 * Constructs SDKErrorResponseException with the specified error response
	 * status code and details.
	 * 
	 * @param errors		the error response details object.
	 * @param responseCode	the error response status code.
	 */
	  public function __construct($errors,$responseCode) {
	    $this->errors = $errors;
	    $this->code = $responseCode;
	  }
	  
	   /**
	   * Gets the error response details.
	   * 
	   * @return Object	the error response object.
	   */
	  public function getErrorResponse() {
	    return $errors;
	  }
	  
	   /**
	   * Gets the error response status code.
	   * 
	   * @return int  the error response status code.
	   */
	  public function getStatCode() {
	    return $this->code;
	  }
}?>