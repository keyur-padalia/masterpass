<?php

namespace Dnetix\MasterPass\Helper;


interface LoggerContract
{

    public function error($message);

    public function info($message);

    public function debug($message);

}