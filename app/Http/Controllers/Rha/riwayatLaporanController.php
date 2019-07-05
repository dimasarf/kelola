<?php

namespace App\Http\Controllers\rha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\hasil_assessment;

class riwayatLaporanController extends Controller
{
    public function index()
    {
        $hasils = hasil_assessment::all();
        return view('rha.riwayatlaporan', compact('hasils'));
    }
}
