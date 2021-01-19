<?php

namespace app\Models\Manager;

interface LoginManagerInterface
{
    public function login($email, $password);
}