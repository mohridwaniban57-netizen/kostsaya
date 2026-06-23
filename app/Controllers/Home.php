<?php

namespace App\Controllers;

use App\Models\KosModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function proses()
    {
        $kosModel = new KosModel();

        $data['kost'] =
            $kosModel
            ->orderBy('kos_id', 'DESC')
            ->findAll();

        return view(
            'beranda/beranda',
            $data
        );
    }

    public function detail($id)
    {
        $kosModel = new KosModel();

        $data['kos'] =
            $kosModel
            ->where('kos_id', $id)
            ->first();

        if (!$data['kos']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        return view(
            'beranda/detail_kost',
            $data
        );
    }
}