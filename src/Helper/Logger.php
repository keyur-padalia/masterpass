<?php

namespace Dnetix\MasterPass\Helper;

/**
 * Class Logger
 * Implementing this logger just because the library uses one
 */
class Logger implements LoggerContract
{
    public static $logger;

    public function __construct($logFile = null)
    {
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
        if (getenv('APP_MP_DEBUG'))
            print "\n" . time() . " - " . $message . "\n";
    }

    public static function getLogger($logFile = null)
    {
        if (!self::$logger)
            self::$logger = new self($logFile);

        return self::$logger;
    }

    public static function setLogger($logger)
    {
        self::$logger = $logger;
    }

}