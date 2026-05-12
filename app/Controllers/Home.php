<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function about_us(): string
    {
        return view('about_us');
    }
}
