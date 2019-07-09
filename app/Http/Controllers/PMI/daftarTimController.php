<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\satgana;
use App\relawan;
use App\hasil_assessment;
use DB;

class daftarTimController extends Controller
{
    public function index()
    {
        $dataLaporan = DB::table('satganas')
                       ->join('hasil_assessments','satganas.id_laporan', '=', 'hasil_assessments.id')
                       ->select('satganas.id_laporan', 'hasil_assessments.created_at', 'hasil_assessments.jenis_bencana','hasil_assessments.lokasi')
                       ->groupBy('satganas.id_laporan','hasil_assessments.created_at', 'hasil_assessments.jenis_bencana','hasil_assessments.lokasi')
                       ->get();
        
        return view('pmi.daftarTim', compact('dataLaporan'));
    }
}
