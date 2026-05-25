<?php

namespace App\Controllers;

class beranda extends BaseController
{
    public function index()
    {
        return view('beranda/beranda');
    }
    public function proses() {
        return redirect()->to('login');
    }
    public function proses1() {
        return redirect()->to('favorit');
    }
    public function proses2() {
        return redirect()->to('register');
    }

}