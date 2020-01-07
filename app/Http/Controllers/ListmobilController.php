<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListmobilController extends Controller
{
    public function index()
    {
    	return view('mobil.listmobil');
    }
}
