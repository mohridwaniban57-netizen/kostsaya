<?php

namespace App\Controllers;

use App\Models\KosModel;

class Admin extends BaseController
{
    protected $kosModel;

    public function __construct()
    {
        $this->kosModel = new KosModel();
    }

    // Dashboard
    public function dashboard()
{
    $db = \Config\Database::connect();

    $data = [
        'totalUser' => $db->table('users')
            ->countAll(),

        'totalPemilik' => $db->table('users')
            ->where('role','pemilik')
            ->countAllResults(),

        'totalKost' => $this->kosModel
            ->countAll(),

        'kostPending' => $this->kosModel
            ->where('status','pending')
            ->countAllResults(),

        'kostPendingList' => $this->kosModel
            ->select('kos.*, users.nama as nama_pemilik')
            ->join(
                'users',
                'users.user_id = kos.pemilik_id'
            )
            ->where('kos.status','pending')
            ->findAll(),

        'totalKamar' => 0,

        'totalPembayaran' => 0
    ];

    return view('admin/dashboard',$data);
}

    // Simpan Data Kost
    public function store()
    {
        $rules = [
            'nama_kos' => 'required',
            'lokasi'   => 'required',
            'harga'    => 'required|numeric',
            'foto'     => 'uploaded[foto]|max_size[foto,2048]|is_image[foto]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Upload Foto
        $foto = $this->request->getFile('foto');

        $namaFoto = null;

        if ($foto->isValid() && !$foto->hasMoved()) {

            $namaFoto = $foto->getRandomName();

            $foto->move('uploads', $namaFoto);
        }

        $this->kosModel->save([
            'pemilik_id' => 1, // sementara
            'nama_kos'   => $this->request->getPost('nama_kos'),
            'lokasi'     => $this->request->getPost('lokasi'),
            'harga'      => $this->request->getPost('harga'),
            'foto'       => $namaFoto
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Data kost berhasil ditambahkan'
        ]);
    }

    // Form Edit
    public function edit($id)
    {
        $data['kost'] = $this->kosModel->find($id);

        return view('admin/kos/edit', $data);
    }

    // Update Data Kost
    public function update($id)
    {
        $kost = $this->kosModel->find($id);

        $dataUpdate = [
            'nama_kos' => $this->request->getPost('nama_kos'),
            'lokasi'   => $this->request->getPost('lokasi'),
            'harga'    => $this->request->getPost('harga')
        ];

        $foto = $this->request->getFile('foto');

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {

            $namaFoto = $foto->getRandomName();

            $foto->move('uploads', $namaFoto);

            // Hapus foto lama
            if (!empty($kost['foto']) && file_exists('uploads/' . $kost['foto'])) {
                unlink('uploads/' . $kost['foto']);
            }

            $dataUpdate['foto'] = $namaFoto;
        }

        $this->kosModel->update($id, $dataUpdate);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Data kost berhasil diperbarui'
        ]);
    }

    // Hapus Data Kost
    public function delete($id)
    {
        $kost = $this->kosModel->find($id);

        if (!empty($kost['foto']) && file_exists('uploads/' . $kost['foto'])) {
            unlink('uploads/' . $kost['foto']);
        }

        $this->kosModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Data kost berhasil dihapus'
        ]);
    }
    public function detail($id)
    {
        $data['kost'] = $this->kosModel
            ->select('kos.*, users.nama')
            ->join(
                'users',
                'users.user_id = kos.pemilik_id'
            )
            ->where('kos_id',$id)
            ->first();

        if(!$data['kost']){
            return redirect()
                ->to('/admin/dashboard')
                ->with('error','Data kost tidak ditemukan');
        }

        return view('admin/kos/detail',$data);
    }
    
    
    
}