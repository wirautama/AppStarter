<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tiket LIVE | Login'
        ];
        return view('Auth/login', $data);
    }
    public function register()
    {
        return view('Auth/register');
    }
}
