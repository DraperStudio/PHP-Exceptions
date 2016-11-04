<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ExpectationFailedException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-EXPECTATION-FAILED')
    {
        parent::__construct($message, $errorCode, 417);
    }
}