<?php
/**
 * Base class for all runtime exceptions thrown by SDK.
 * <p>
 * This class extends RuntimeException of java. All subclasses used in SDK for
 * runtime exceptions will extend this base class
 * </p>
 * 
 * @category class SDKBaseException
 * @package  MasterCardCoreSDK
 * @subpackage  Exception
 */
class SDKBaseException extends RuntimeException
{
  /**
   * Constructs SDKBaseException with detail error message.
   * @param errorMessage	the error message details.
   */
	public function __construct($errorMessage)
	{
		parent::__construct($errorMessage);
	}
	
}

?>