<?php

namespace Dnetix\MasterPass\Model;

/**
 * Holds data relevant to the Access Token and Checkout Resources
 */
class AccessTokenResponse
{
    public $oauth_token;
    public $oauth_token_secret;

    public function __construct($data = null)
    {
        $this->load($data);
    }

    public function load($data = null)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function token()
    {
        return $this->oauth_token;
    }

    public function tokenSecret()
    {
        return $this->oauth_token_secret;
    }

}
