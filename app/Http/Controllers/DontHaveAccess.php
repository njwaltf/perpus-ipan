<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DontHaveAccess extends Controller
{
    public function index()
    {
        return view('donthaveaccess', [
            'title' => 'Perpus | donthaveaccess'
        ]);
    }
}