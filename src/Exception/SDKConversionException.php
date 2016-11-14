<?php

/**
 * @package  MasterCardCoreSDK
 * @subpackage  Exception
 * @class SDKConversionException | Thrown when issue occur during request/response conversion. 
 * 
 */
 
 
/**
 * Thrown to indicate exceptions occurred during request/response conversion.
 * <p>
 * This exception class is used when any exception occurred during conversion of
 * request and response to the specified content type. All implemented converter
 * will throw SDKConversionException whenever exception occurs.
 * </p>
 * 
 */
 
class SDKConversionException extends SDKBaseException 
{

	private $converterName;
	
	/**
	 * Constructs SDKConversionException with the specified error message and converter name.
	 * @param errorMessage		the error message.
	 * @param converterName	the converter name where conversion exception occurred.
	 */
	public function __construct($errorMessage,$converterName)
	{
		  parent::__construct($errorMessage);
		  $this->converterName = $converterName;
	}
	
	/**
	 * Gets the converter name where conversion exception occurred.
	 * @return String	the converter name where conversion exception occurred.
	 */
	public function getConverterName() 
	{
		return $this->converterName;
	}

	
}

?>