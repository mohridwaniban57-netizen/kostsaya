<?php
namespace App\Controllers;

use App\Models\KamarModel;

class Kamar extends BaseController {

    public function index($kost_id = null) {
        $model = new KamarModel();

        return view('kamar/index', [
            'kamar' => $model->where('kost_id', $kost_id)->findAll(),
            'kost_id' => $kost_id
        ]);
    }

    public function store() {
        $model = new KamarModel();

        $model->save([
            'kost_id' => $this->request->getPost('kost_id'),
            'nomor' => $this->request->getPost('nomor'),
            'harga' => $this->request->getPost('harga')
        ]);

        return redirect()->back();
    }
}