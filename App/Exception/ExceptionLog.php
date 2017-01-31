<?php

namespace App\Exception;


class ExceptionLog
    extends \Exception
{

    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $textError = $this->getTraceAsString() . "\r\n";
        file_put_contents(__DIR__ . '/../../exceptionLog.txt', $textError, FILE_APPEND);
    }

}