<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\rencana_kontijensi;

class uploadRencanaController extends Controller
{
    public function index()
    {
        return view('pmi.uploadrencana');
    }

    public function store(Request $request)
    {
        $laporan = $request->file('file');
        $laporanName = $laporan->getClientOriginalName();
        $laporan->move(public_path('rencana'),$laporanName);

        $rencanas = new rencana_kontijensi();
        $rencanas->rencana = $laporanName;
        $rencanas->save();
        return response()->json(['success'=>$laporanName]);
    }
}
