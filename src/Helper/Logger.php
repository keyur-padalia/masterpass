<?php

namespace Dnetix\MasterPass\Helper;

/**
 * Class Logger
 * Implementing this logger just because the library uses one
 */
class Logger
{
    protected $logFile;

    public function __construct($logFile = null)
    {
        $this->logFile = $logFile;
    }

    public function error($message)
    {
        $this->output($message);
    }

    public function info($message)
    {
        $this->output($message);
    }

    public function debug($message)
    {
        $this->output($message);
    }

    public function output($message)
    {
        print "\n" . time() . " - " . $message . "\n";
    }

    public static function getLogger($logFile = null)
    {
        return new self($logFile);
    }

}