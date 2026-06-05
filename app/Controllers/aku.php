<?php

namespace App\Controllers;

use App\Models\KamarModel;

class Kecamatan extends BaseController
{
    protected $KamarModel;

    public function index()
    {
        // Pagination: 10 data per halaman
        $currentPage = $this->request->getVar('page_kecamatan') ?? 1;

        $data['kecamatan'] = $this->KamarModel->paginate(1, 'kecamatan');

        // $data['pager'] = $this->kecamatanModel->pager; ABAIKAN

        $data['currentPage'] = $currentPage;
        $data['kelelawar'] = "Batman";

        return view('pages/dashboard/kecamatan/index', $data);
    }

    public function create()
    {
        return $this->response->setJSON([
            'success' => true
        ]);
    }

    public function store()
    {

    }
}