<?php
namespace App\Controllers;

use App\Models\KosModel;

class Kost extends BaseController {

    public function index() {
        $model = new KosModel();

        return view('kost/index', [
            'kost' => $model->findAll()
        ]);
    }

    public function detail($id) {
        $model = new KosModel();

        return view('kost/detail', [
            'kost' => $model->find($id)
        ]);
    }

    public function store() {
        $model = new KosModel();

        $model->save([
            'nama_kost' => $this->request->getPost('nama_kost'),
            'lokasi' => $this->request->getPost('lokasi'),
            'harga' => $this->request->getPost('harga')
        ]);

        return redirect()->to('/kost');
    }
}