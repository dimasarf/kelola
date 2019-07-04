<?php

namespace App\Http\Controllers\rha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class downloadLaporanController extends Controller
{
    public function index()
    {
        return view('rha.downloadlaporan');
    }
}
