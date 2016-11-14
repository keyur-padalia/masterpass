<?php

namespace Dnetix\MasterPass\Exception;

/**
 * Thrown to indicate exceptions occurred during Ouath signature creation.
 * @class SDKOauthException | Thrown when require parameters missing.
 *
 * @package  MasterCardCoreSDK
 * @subpackage  Exception
 */
class SDKOauthException extends SDKBaseException
{

    /**
     * @method Custom Exception SDKOauthException
     *
     * @param errorMessage
     */
    public function __construct($errorMessage)
    {
        parent::__construct($errorMessage);
    }
}

?>