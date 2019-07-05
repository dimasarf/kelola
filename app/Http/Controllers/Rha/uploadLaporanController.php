<?php

namespace App\Http\Controllers\rha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_arrestment;
use App\hasil_assessment;
use Session;
use Illuminate\Support\Facades\Redirect;

class uploadLaporanController extends Controller
{
    public function index()
    {
        return view('rha.uploadlaporan');
    }

    public function store(Request $request)
    {
        $laporan = new hasil_assessment();
        $laporan::create($request->all());
        return Redirect::back()->with('Pesan', 'Hasil Penilaian berhasil disimpan!'); 
    }
}
