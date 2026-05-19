<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController {

    public function index() {
        return view('pembayaran/index');
    }

    public function upload() {
        $file = $this->request->getFile('bukti');

        $nama = $file->getRandomName();
        $file->move('uploads/pembayaran', $nama);

        $model = new PembayaranModel();

        $model->save([
            'user_id' => session('user')['id'],
            'bukti' => $nama,
            'status' => 'pending'
        ]);

        return redirect()->to('/pembayaran');
    }
}