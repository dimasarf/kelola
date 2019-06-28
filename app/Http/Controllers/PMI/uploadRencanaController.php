<?php

namespace App\Http\Controllers\PMI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class uploadRencanaController extends Controller
{
    public function index()
    {
        return view('pmi.uploadrencana');
    }
}
