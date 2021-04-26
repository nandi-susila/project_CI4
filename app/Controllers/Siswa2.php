<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Siswa2 extends BaseController
{
    public function home()
    {
        return view('siswa/home');
    }
}
