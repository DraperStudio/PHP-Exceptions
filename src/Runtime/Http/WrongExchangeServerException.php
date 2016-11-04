<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class WrongExchangeServerException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-WRONG-EXCHANGE-SERVER')
    {
        parent::__construct($message, $errorCode, 451);
    }
}