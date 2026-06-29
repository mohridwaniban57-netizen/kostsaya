<?php

namespace App\Controllers;

use App\Models\KosModel;

class Pemilik extends BaseController
{
    public function dashboard()
    {
        $kosModel = new KosModel();

        $pemilikId = session()->get('user_id');

        $total_kost = $kosModel
            ->where('pemilik_id', $pemilikId)
            ->countAllResults();

        $kost_aktif = $kosModel
            ->where('pemilik_id', $pemilikId)
            ->where('status', 'aktif')
            ->countAllResults();

        $kost_pending = $kosModel
            ->where('pemilik_id', $pemilikId)
            ->where('status', 'pending')
            ->countAllResults();

        $data = [
            'total_kost'    => $total_kost,
            'kost_aktif'    => $kost_aktif,
            'kost_pending'  => $kost_pending,
            'total_kamar'   => 0,
            'booking_masuk' => 0,
            'pendapatan'    => 0,
        ];

        return view('pemilik/dashboard', $data);
    }

    public function kost()
    {
        $kosModel = new KosModel();

        $data['kos'] = $kosModel
            ->where('pemilik_id', session()->get('user_id'))
            ->findAll();

        return view('pemilik/kost/kost', $data);
    }

    public function tambahKost()
    {
        return view('pemilik/tambahkost/tambahkost');
    }

    public function simpanKost()
    {
        $kosModel = new KosModel();

        $foto = $this->request->getFile('foto');

        $namaFoto = null;

        if (
            $foto &&
            $foto->isValid() &&
            !$foto->hasMoved()
        ) {

            $namaFoto = $foto->getRandomName();

            $foto->move(
                FCPATH . 'uploads',
                $namaFoto
            );
        }
        
        $data = [
            'pemilik_id' => session()->get('user_id'),
            'nama_kos'   => $this->request->getPost('nama_kos'),
            'lokasi'     => $this->request->getPost('lokasi'),
            'harga'      => $this->request->getPost('harga'),
            'foto'       => $namaFoto,
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'fasilitas'  => $this->request->getPost('fasilitas'),
            'tipekost'   => $this->request->getPost('tipekost'),
            'status'     => $this->request->getPost('status')
        ];

        $kosModel->insert($data);

        return redirect()
            ->to('/pemilik/kost')
            ->with(
                'success',
                'Data kost berhasil disimpan.'
            );
    }

    public function detailKost($id)
    {
        $kosModel = new KosModel();

        $data['kos'] = $kosModel
            ->where('kos_id', $id)
            ->where('pemilik_id', session()->get('user_id'))
            ->first();

        if (!$data['kos']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('pemilik/kost/detail', $data);
    }
    public function editKost($id)
{
    $kosModel = new KosModel();

    $data['kos'] = $kosModel
        ->where('kos_id', $id)
        ->where('pemilik_id', session()->get('user_id'))
        ->first();

    if (!$data['kos']) {

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

    }

    return view('pemilik/kost/edit', $data);
}

    public function updateKost($id)
    {
        $kosModel = new KosModel();

        $kos = $kosModel
            ->where('kos_id', $id)
            ->where('pemilik_id', session()->get('user_id'))
            ->first();

        if (!$kos) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        }

        $foto = $this->request->getFile('foto');

        $namaFoto = $kos['foto'];

        if (
            $foto &&
            $foto->isValid() &&
            !$foto->hasMoved()
        ) {

            $namaFoto = $foto->getRandomName();

            $foto->move(
                FCPATH . 'uploads',
                $namaFoto
            );
        }

        $data = [

            'nama_kos'  => $this->request->getPost('nama_kos'),
            'lokasi'    => $this->request->getPost('lokasi'),
            'harga'     => $this->request->getPost('harga'),
            'foto'      => $namaFoto,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'fasilitas' => $this->request->getPost('fasilitas'),
            'tipekost'  => $this->request->getPost('tipekost')

        ];

        $kosModel->update($id, $data);

        return redirect()
            ->to('/pemilik/kost')
            ->with(
                'success',
                'Data kost berhasil diperbarui.'
            );
    }
    public function hapusKost($id)
    {
        $kosModel = new KosModel();


        $kos = $kosModel
            ->where('kos_id',$id)
            ->where(
                'pemilik_id',
                session()->get('user_id')
            )
            ->first();


        if(!$kos){

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        }


        // hapus foto lama
        if(!empty($kos['foto'])){

            $path = FCPATH.'uploads/'.$kos['foto'];

            if(file_exists($path)){

                unlink($path);

            }

        }


        // soft delete
        $kosModel->delete($id);


        return redirect()
            ->to('/pemilik/kost')
            ->with(
                'success',
                'Kost berhasil dihapus.'
            );

    }
}