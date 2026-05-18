<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $data = [
            'title' => 'Beranda - Sistem Kost'
        ];

        return view('layout/template', $data + [
            'content' => 'home/index'
        ]);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];

        return view('layout/template', $data + [
            'content' => 'home/tentang'
        ]);
    }
}
=======
        return view('layout/template');
    }
}
>>>>>>> ezy
