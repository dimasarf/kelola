<?php

namespace App\Http\Controllers\rha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardRhaController extends Controller
{
    public function index()
    {
        return view('rha.dashboardrha');
    }
}
