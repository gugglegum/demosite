<?php

namespace app;

/**
 * Класс исключения для генерации ошибки уровня HTTP
 *
 * @package app
 */
class HttpException extends Exception
{
    public function __construct($code, $message = '', Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
