<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController {

#menampilakan halaman
    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }
#Menyimpan data user baru ke database (REGISTER).
    public function store() {
        #memanggil model user
        $model = new UserModel();
        #simpan data ke database
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        ]);

        return redirect()->to('/login');
    }
    #Memproses LOGIN user
    public function attempt() {
        $model = new UserModel(); #Ambil data user dari database
        $user = $model->where('email', $this->request->getPost('email'))->first(); #cari user berdasarkan email

        #Cek password user atau tdk
        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            #simpan data user ke session (login aktif)
            session()->set('user', $user);
            if ($user['role'] == 'admin') {
                return redirect()->to('/admin/dashboard');
            }

            elseif ($user['role'] == 'pemilik_kost') {
                return redirect()->to('/pemilik/dashboard');
            }

            else {
                return redirect()->to('/pencari_kost/dashboard');
            }
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}