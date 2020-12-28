<?php

namespace App\Exceptions;
use Illuminate\Support\Facades\Log;

use Exception;

class ProductException extends Exception
{
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('error');
    }

    public function report()
    {
        error_log("Une exception");
        Log::debug('Une Exception');
    }
}
