<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }
    public function attempt()
    {
        $model = new UserModel();

        $user = $model->where('email', $this->request->getPost('email'))
            ->first();
            
        if (
            $user &&
            password_verify(
                $this->request->getPost('password'),
                $user['password']
            )
        ) {

            session()->set(['user_id' => $user['user_id'],'nama'    => $user['nama'],'email'   => $user['email'],'role'    => $user['role'],'isLoggedIn' => true]);

            if ($user['role'] == 'admin') {

                return redirect()->to('/admin/dashboard');

            } elseif ($user['role'] == 'pemilik') {

                return redirect()->to('/pemilik/dashboard');

            } else {

                return redirect()->to('/beranda');
            }
        }

        return redirect()
            ->back()
            ->with('error', 'password salah');
    }

    public function register()
    {
        return view('auth/register');
    }
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

        return redirect()->to('/beranda');
    }
}