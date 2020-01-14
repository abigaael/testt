<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Mobil;
use App\Model\Rental;

class ListmobilController extends Controller
{
    public function index()
    {	
    	$data_mobil     = Mobil::all();
        $data_rental    = Rental::all();
    	return view('mobil.listmobil',['data_mobil' => $data_mobil, 'data_rental' => $data_rental]);
    }

    public function create(Request $request)
    {
        // return $request->all();
        $StoreMobil             = new Mobil();
        $StoreMobil->car_name   = $request->input('car_name');
        $StoreMobil->kode_mobil = $request->input('kode_mobil');
        $StoreMobil->no_polisi  = $request->input('no_polisi');
        $StoreMobil->brand      = $request->input('brand');
        $StoreMobil->type       = $request->input('type');
        $StoreMobil->warna      = $request->input('warna');
        $StoreMobil->harga_sewa = $request->input('harga_sewa');
        $StoreMobil->save();
    	// Mobil::create($request->all());
    	return redirect ('/mobil')->with('Success','Data Entered Successfully!');
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id); 
        return view('mobil/edit',['mobil' => $mobil]);
    }

    public function update(Request $request,$id)
    {
        // return $request->all();
        $mobil              = Mobil::find($id);
        $mobil->car_name    = $request->input('car_name');
        $mobil->kode_mobil  = $request->input('kode_mobil');
        $mobil->no_polisi   = $request->input('no polisi');
        $mobil->brand       = $request->input('brand');
        $mobil->type        = $request->input('type');
        $mobil->warna       = $request->input('warna');
        $mobil->harga_sewa  = $request->input('harga_sewa');
        // $mobil->update($request->all());
        return redirect('/mobil')->with('sukses','Data updated successfully'); 
    }

    public function delete($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete($mobil);
        return redirect('/mobil')->with('sukses','Data has been deleted'); 
    }
}


