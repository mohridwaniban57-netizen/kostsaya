<?php

namespace App\Controllers;

use App\Models\KosModel;

class beranda extends BaseController
{
    public function index()
    {
        $model = new KosModel();

        $data['kost'] = $model->findAll();

        return view('beranda/beranda', $data);
    }

    public function proses()
    {
        return redirect()->to('login');
    }

    public function proses1()
    {
        return redirect()->to('favorit');
    }

    public function proses2()
    {
        return redirect()->to('register');
    }

    public function detail($id)
    {
        $model = new KosModel();

        $data['kos'] =
        $model
        ->where(
            'kos_id',
            $id
        )
        ->first();

        if (!$data['kos']) {
            return redirect()->to('beranda');
        }

        return view(
            'beranda/detail_kost',
            $data
        );
    }
}
