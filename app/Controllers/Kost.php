<?php
namespace App\Controllers;

use App\Models\KostModel;

class Kost extends BaseController {

    public function index() {
        $model = new KostModel();

        return view('kost/index', [
            'kost' => $model->findAll()
        ]);
    }

    public function detail($id) {
        $model = new KostModel();

        return view('kost/detail', [
            'kost' => $model->find($id)
        ]);
    }

    public function store() {
        $model = new KostModel();

        $model->save([
            'nama_kost' => $this->request->getPost('nama_kost'),
            'alamat' => $this->request->getPost('alamat'),
            'harga' => $this->request->getPost('harga')
        ]);

        return redirect()->to('/kost');
    }
}