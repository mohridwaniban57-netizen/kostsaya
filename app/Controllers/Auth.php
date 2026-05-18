<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function prosesLogin()
    {
        echo "Proses Login";
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}