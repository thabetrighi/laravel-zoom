<?php

namespace Thabetrighi\Zoom\Exceptions;

use Exception;

class ValidationException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
