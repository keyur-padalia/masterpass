<?php

namespace Dnetix\MasterPass\Exception;

/**
 * Base class for all runtime exceptions thrown by SDK.
 * This class extends RuntimeException of java. All subclasses used in SDK for
 * runtime exceptions will extend this base class
 */
class SDKBaseException extends \RuntimeException
{
    /**
     * Constructs SDKBaseException with detail error message.
     * @param $errorMessage
     */
    public function __construct($errorMessage)
    {
        parent::__construct($errorMessage);
    }

}
