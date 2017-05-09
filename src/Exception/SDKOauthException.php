<?php

namespace Dnetix\MasterPass\Exception;

/**
 * Thrown to indicate exceptions occurred during Ouath signature creation.
 */
class SDKOauthException extends SDKBaseException
{
    public function __construct($errorMessage)
    {
        parent::__construct($errorMessage);
    }
}
