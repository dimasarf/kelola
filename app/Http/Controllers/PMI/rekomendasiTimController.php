<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_assessment;
use App\relawan;
use App\satgana;
use Session;
use Illuminate\Support\Facades\Redirect;

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
        $timEvakuasi = $this->getTim(2, $nEvakuasi);
        $timKesehatan = $this->getTim(3, $nKesehatan);
        $timDapur = $this->getTim(4, $nDapur);
        $timWater = $this->getTim(5, $nWater);
        $timShelter = $this->getTim(6, $nShelter);
        $timRfl = $this->getTim(7, $nRfl);
        $this->store($id, $timAssessment);
        $this->store($id, $timDapur);
        $this->store($id, $timEvakuasi);
        $this->store($id, $timKesehatan);
        $this->store($id, $timRfl);
        $this->store($id, $timShelter);
        $this->store($id, $timWater);
        return view('pmi.rekomendasiTim', compact('id','nKesehatan', 'nAssessment', 'nDapur', 'nEvakuasi', 'nWater', 'nShelter', 'nRfl', 
        'timAssessment','timEvakuasi','timKesehatan','timDapur','timWater','timShelter','timRfl'));
    }

    public function getTim($idKeahlian, $n)
    {
        $satgana = satgana::all();
        $tim = relawan::where('id_keahlian', $idKeahlian)->whereNotIn('id',function($query)
        {
            $query->select('id_relawan')->from('satganas');
        })->take($n)->get();
        return $tim;
    }

    public function store($id_laporan, $data)
    {
        foreach($data as $key)
        {
            $satgana = new satgana();
            $satgana->id_relawan = $key->id;
            $satgana->id_keahlian = $key->id_keahlian;
            $satgana->id_laporan = $id_laporan;
            $satgana->save();
        }
    }

    public function kirim()
    {
        return Redirect::back()->with('Pesan', 'Tim berhasil dikirim!'); 
    }
}