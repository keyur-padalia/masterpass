<?php

namespace Dnetix\MasterPass\Helper;

/**
 * Set Query param array.
 * @package  MasterCardCoreSDK
 * @subpackage  Helper
 */

class QueryParams
{

    private $queryParams = [];

    public function add($key, $value)
    {
        $this->queryParams[$key] = $value;
        return $this->queryParams;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

}
