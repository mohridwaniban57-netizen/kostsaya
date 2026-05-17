<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function about_us(): string
    {
        return view('about_us');
    }

    public function index(): string
    {
        return view('welcome_message');
    }
}
got add