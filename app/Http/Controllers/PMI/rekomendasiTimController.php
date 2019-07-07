<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_assessment;
use App\relawan;

class rekomendasiTimController extends Controller
{
    public function index($id)
    {
        $laporan = hasil_assessment::find($id);
        $data = [$laporan->korban, $laporan->infrastruktur];
        $param = implode(",", $data);
        $nAssessment = exec('py C:\xampp\htdocs\kelola\public\fuzzy\assesment.py 2>&1 ' .$param);
        $nEvakuasi = exec('py C:\xampp\htdocs\kelola\public\fuzzy\evakuasi.py 2>&1 ' .$param);
        $nKesehatan = exec('py C:\xampp\htdocs\kelola\public\fuzzy\kesehatan.py 2>&1 ' .$param);
        $nDapur = exec('py C:\xampp\htdocs\kelola\public\fuzzy\dapur.py 2>&1 ' .$param);
        $nWater = exec('py C:\xampp\htdocs\kelola\public\fuzzy\woshwater.py 2>&1 ' .$param);
        $nShelter = exec('py C:\xampp\htdocs\kelola\public\fuzzy\shelter.py 2>&1 ' .$param);
        $nRfl = exec('py C:\xampp\htdocs\kelola\public\fuzzy\rfl.py 2>&1 ' .$param);
        
        $timAssessment = $this->getTim(1, $nAssessment);
        $timEvakuasi = $this->getTim(3, $nEvakuasi);
        $timKesehatan = $this->getTim(3, $nKesehatan);
        $timDapur = $this->getTim(4, $nDapur);
        $timWater = $this->getTim(5, $nWater);
        $timShelter = $this->getTim(6, $nShelter);
        $timRfl = $this->getTim(7, $nRfl);
        return view('pmi.rekomendasiTim', compact('nKesehatan', 'nAssessment', 'nDapur', 'nEvakuasi', 'nWater', 'nShelter', 'nRfl', 
        'timAssessment','timEvakuasi','timKesehatan','timDapur','timWater','timShelter','timRfl'));
    }

    public function getTim($idKeahlian, $n)
    {
        $tim = relawan::where('id_keahlian', $idKeahlian)->take($n)->get();
        return $tim;
    }
}