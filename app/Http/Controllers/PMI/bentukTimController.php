<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hasil_assessment;

class bentukTimController extends Controller
{
    public function index()
    {
        $hasils = hasil_assessment::all();
        return view('pmi.bentukTim', compact('hasils'));
    }
}
