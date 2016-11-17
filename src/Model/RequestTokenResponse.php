<?php

namespace Dnetix\MasterPass\Model;

/**
 *  Holds data relevant to the Request Token
 */
class RequestTokenResponse
{

    protected $oauth_callback_confirmed;
    protected $oauth_expires_in;
    protected $oauth_token;
    protected $oauth_token_secret;
    protected $xoauth_request_auth_url;

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

    /**
     * TODO: Eval the string to boolean
     * @return bool
     */
    public function isCallbackConfirmed()
    {
        return !!$this->oauth_callback_confirmed;
    }

    public function expiresIn()
    {
        return $this->oauth_expires_in;
    }

    public function token()
    {
        return $this->oauth_token;
    }

    public function tokenSecret()
    {
        return $this->oauth_token_secret;
    }

    public function requestAuthUrl()
    {
        return $this->xoauth_request_auth_url;
    }

}
