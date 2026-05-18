<?php

namespace App\Controllers;

class Pemilik extends BaseController
{
    public function dashboard()
    {
        return view('pemilik/dashboard');
    }

    public function tambahKost()
    {
        return view('pemilik/tambah_kost');
    }

    public function dataKost()
    {
        return view('pemilik/data_kost');
    }

    public function editKost($id)
    {
        $data['id_kost'] = $id;

        return view('pemilik/edit_kost', $data);
    }

    public function booking()
    {
        return view('pemilik/booking');
    }

    public function profil()
    {
        return view('pemilik/profil');
    }
}