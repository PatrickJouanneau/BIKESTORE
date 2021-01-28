<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class DaoException extends Exception
{
    public function render()
    {
        return view('error');
    }

    public function report()
    {
        Log::debug('Une exception est retournée');
    }
}
