<?php

namespace Dnetix\MasterPass;

/**
 * Set base sdk version
 * @package  MasterCardCoreSDK
 * @category class baseSdkVersion
 */
class baseSdkVersion
{

    /** @const BaseSDKVersion  | Specify the version of base sdk * */
    const baseVersion = "1.1.0";

    /** Setting up base sdk version to be used in api tracker header **/
    public static function getBaseVersion()
    {
        return baseSdkVersion::baseVersion;
    }

}

?>