<?php

namespace App\Controllers;
use App\Models\DataPasienModel;
use App\Models\RekamMedisModel;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

}
