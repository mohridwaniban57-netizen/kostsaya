<?php

namespace App\Controllers;

class Pencari extends BaseController
{
    public function dashboard()
    {
        return view('pencari/dashboard');
    }

    public function kost()
    {
        return view('pencari/kost');
    }

    public function detail($id)
    {
        $data['id_kost'] = $id;

        return view('pencari/detail', $data);
    }

    public function booking()
    {
        return view('pencari/booking');
    }

    public function profil()
    {
        return view('pencari/profil');
    }
}