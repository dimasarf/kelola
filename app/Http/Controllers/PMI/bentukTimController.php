<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_assessment;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class bentukTimController extends Controller
{
    public function index()
    {
        $var1 = 1;
        $var2 = [2, 1];
        $tes2 = implode(",", $var2);
        
        $var3 = "!";
        $tes=exec('py E:\tes.py 2>&1 ' .$tes2);
        $hasils = hasil_assessment::all();
        return view('pmi.bentukTim', compact('hasils', 'tes'));
    }
}
