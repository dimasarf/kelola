<?php

namespace App\Http\Controllers\pmi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        return view('pmi.laporan');
    }
}
