<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController {

    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }

    public function store() {
        $model = new UserModel();

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        ]);

        return redirect()->to('/login');
    }

    public function attempt() {
        $model = new UserModel();

        $user = $model->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('user', $user);
            return redirect()->to('/kost');
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}