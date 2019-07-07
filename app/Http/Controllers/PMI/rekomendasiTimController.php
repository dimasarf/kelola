<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_assessment;

class rekomendasiTimController extends Controller
{
    public function index($id)
    {
        $laporan = hasil_assessment::find($id);
        $data = [$laporan->korban, $laporan->infrastruktur];
        $param = implode(",", $data);
        $nAssessment = exec('py E:\assesment.py 2>&1 ' .$param);
        $nEvakuasi = exec('py E:\evakuasi.py 2>&1 ' .$param);
        $nKesehatan = exec('py E:\kesehatan.py 2>&1 ' .$param);
        $nDapur = exec('py E:\dapur.py 2>&1 ' .$param);
        $nWater = exec('py E:\woshwater.py 2>&1 ' .$param);
        $nShelter = exec('py E:\shelter.py 2>&1 ' .$param);
        $nRfl = exec('py E:\rfl.py 2>&1 ' .$param);
        return view('pmi.rekomendasiTim', compact('nKesehatan', 'nAssessment', 'nDapur', 'nEvakuasi', 'nWater', 'nShelter', 'nRfl'));
    }
}
