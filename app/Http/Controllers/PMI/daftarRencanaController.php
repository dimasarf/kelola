<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\rencana_kontijensi;
use Storage;

class daftarRencanaController extends Controller
{
    public function index()
    {
        $rencanas = rencana_kontijensi::all();
        return view('pmi.daftarRencana', compact('rencanas'));
    }

    public function download($filename)
    {
        // $file = public_path().'/' .'rencana'.'/'.$filename;
        return response()->download('C:/xampp/htdocs/kelola/public/rencana/', $filename);
    }
}
