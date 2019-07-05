<?php

namespace App\Http\Controllers\rha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_arrestment;
use App\hasil_assessment;

class uploadLaporanController extends Controller
{
    public function index()
    {
        return view('rha.uploadlaporan');
    }

    public function store(Request $request)
    {
        $laporan = $request->file('file');
        $laporanName = $laporan->getClientOriginalName();
        $laporan->move(public_path('laporan'),$laporanName);

        $laporans = new hasil_arrestment();
        $laporans->laporan = $laporanName;
        $laporan->lokasi = $request->lpokasi;
        $laporan->uploader = $request->nama;
        $laporans->save();
        return response()->json(['success'=>$laporanName]);
    }
}
