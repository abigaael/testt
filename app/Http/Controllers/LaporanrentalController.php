<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanrentalController extends Controller
{
    public function index()
    {
    	return view('rental.laporanrental');
    }
}
