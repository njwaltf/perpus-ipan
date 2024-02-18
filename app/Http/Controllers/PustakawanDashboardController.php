<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanDashboardController extends Controller
{
    public function index()
    {
        return view('Pustakawan', [
            'title' => 'Perpus | Pustakawan'
        ]);
    }
}