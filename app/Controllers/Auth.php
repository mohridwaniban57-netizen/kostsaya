<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    // Menampilkan halaman login
    public function login()
    {
        return view('auth/login');
    }

    // Memproses LOGIN user
    public function attempt()
    {
        $model = new UserModel();

        $user = $model
            ->where('email', $this->request->getPost('email'))
            ->first();

        if (
            $user &&
            password_verify(
                $this->request->getPost('password'),
                $user['password']
            )
        ) {

            session()->set('user', $user);

            if ($user['role'] == 'admin') {
                return redirect()->to('/admin/dashboard');
            } elseif ($user['role'] == 'pemilik_kost') {
                return redirect()->to('/pemilik/dashboard');
            } else {
                return redirect()->to('/pencari_kost/dashboard');
            }
        }

        return redirect()
            ->back()
            ->with('error', 'Login gagal');
    }

    // Menampilkan halaman register
    public function register()
    {
        return view('auth/register');
    }

    // Menyimpan data user baru ke database (REGISTER)
    public function store()
    {
        try {

            $model = new UserModel();

            $model->save([
                'nama'     => $this->request->getPost('nama'),
                'email'    => $this->request->getPost('email'),
                'password' => password_hash(
                    $this->request->getPost('password'),
                    PASSWORD_DEFAULT
                ),
                'role'     => $this->request->getPost('role')
            ]);

            return redirect()
                ->to('/login')
                ->with('success', 'Registrasi berhasil! Silakan login.');

        } catch (\Exception $e) {

            die($e->getMessage());

        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}