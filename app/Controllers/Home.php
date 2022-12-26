<?php

namespace App\Controllers;

use App\Models\DiskonModel;

class Home extends BaseController
{
    public function index()
    {
        $this->diskon = new DiskonModel();
        $diskon = $this->diskon->findAll();
        return view('home', ['diskons' => $diskon]);
    }

    public function contact()
    {
        return view('contact');
    }
}
