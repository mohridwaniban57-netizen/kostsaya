<?php
namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\PembayaranModel;

class Admin extends BaseController {

    public function dashboard() {
        return view('admin/dashboard');
    }

    public function booking() {
        $model = new BookingModel();

        return view('admin/booking', [
            'booking' => $model->findAll()
        ]);
    }

    public function approve($id) {
        $model = new BookingModel();

        $model->update($id, ['status' => 'approved']);

        return redirect()->back();
    }

    public function reject($id) {
        $model = new BookingModel();

        $model->update($id, ['status' => 'rejected']);

        return redirect()->back();
    }
}