<?php
namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\KamarModel;

class Booking extends BaseController {

    public function index() {
        $model = new BookingModel();

        return view('booking/index', [
            'booking' => $model->findAll()
        ]);
    }

    public function store() {
        $model = new BookingModel();

        $model->save([
            'user_id' => session('user')['id'],
            'kamar_id' => $this->request->getPost('kamar_id'),
            'status' => 'pending'
        ]);

        return redirect()->to('/booking');
    }
}