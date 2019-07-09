<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\satgana;
use App\relawan;
use App\hasil_assessment;
use DB;

class detailTimController extends Controller
{
    public function index($idLaporan)
    {
        $dataTim = DB::table('satganas')
                   ->where('id_laporan', $idLaporan)
                   ->join('relawans', 'satganas.id_relawan', '=', 'relawans.id')
                   ->join('keahlians','satganas.id_keahlian', '=','keahlians.id_keahlian')
                   ->join('hasil_assessments','satganas.id_laporan', '=', 'hasil_assessments.id')
                   ->select('relawans.*', 'hasil_assessments.*', 'keahlians.*')
                   ->orderBy('satganas.created_at', 'desc')
                   ->get();
        return view('pmi.detailtim', compact('dataTim'));

    }
}
