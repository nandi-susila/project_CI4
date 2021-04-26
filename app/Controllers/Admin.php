<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Admin extends BaseController
{
    public function home()
    {
        return view('admin/home');
    }
}
