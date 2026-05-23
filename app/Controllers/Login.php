<?php

namespace App\Controllers;

class Login extends BaseController
{
   public function login() {
        echo view('auth/login');
    }}




//     public function proses() {
//         return redirect()->to('admin');
//     }
// }