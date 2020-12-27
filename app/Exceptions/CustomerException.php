<?php

namespace App\Exceptions;
use Illuminate\Support\Facades\Log;

use Exception;

class CustomerException extends Exception
{
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
