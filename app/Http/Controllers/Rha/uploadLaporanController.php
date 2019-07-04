<?php

namespace App\Http\Controllers\rha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class uploadLaporanController extends Controller
{
    public function index()
    {
        return view('rha.uploadlaporan');
    }
}
