<?php

namespace App\Controllers;

class Login extends BaseController
{
    // tampilkan halaman login
    public function index()
    {
        return view('auth/login');
    }

    // proses login
    public function proses()
    {
        // nanti di sini biasanya cek username & password
        // contoh sederhana:

        $session = session();

        $session->set([
            'logged_in' => true
        ]);

        // arahkan ke dashboard
        return redirect()->to('/dashboard');
    }
}