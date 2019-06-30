<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class daftarRencanaController extends Controller
{
    public function index()
    {
        return view('pmi.daftarRencana');
    }
}
