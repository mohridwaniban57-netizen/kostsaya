<?php

namespace App\Controllers;

use App\Models\KosModel;

class Jelajahi extends BaseController
{
    public function index()
    {
        $model = new KosModel();

        $data['kost'] =
            $model
            ->findAll();

        return view(
            'jelajahi/jelajahi',
            $data
        );
    }
}
