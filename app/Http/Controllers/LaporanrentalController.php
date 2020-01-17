<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Rental;
use App\Model\Mobil;
use App\Model\Customer;


class LaporanrentalController extends Controller
{
    public function index()
    {   
        $data_rental    = Rental::all(); 
        $data_mobil     = Mobil::all();
        $data_customer  = Customer::all();
        return view('rental.laporanrental',['data_rental' => $data_rental, 'data_mobil' => $data_mobil, 'data_customer' => $data_customer]);
    }

    public function create(Request $request)
    {
        // return $request->all();
        $StoreRental                  = new Rental();
        $StoreRental->no_transaksi    = $request->input('no_transaksi');
        $StoreRental->kode_mobil      = $request->input('car_name');
        $StoreRental->kode_customer   = $request->input('nama_customer');
        $StoreRental->tgl_rental      = $request->input('tgl_rental');
        $StoreRental->tgl_kembali     = $request->input('tgl_kembali');
        
        $StoreRental->save();
        
        return redirect ('/rental')->with('Success','Data Entered Successfully!');
    }

    public function edit($id)
    {
        $rental   = Rental::find($id); 
        $customer = Customer::all(); 
        $mobil    = Mobil::all();
        return view('rental/edit',['rental' => $rental, 'customer' => $customer, 'mobil' => $mobil]);

    }

    public function update(Request $request,$id)
    {
        $rental = Rental::find($id);
        // $rental->update($request->all());
        $rental                 = Rental::find($id);
        $rental->no_transaksi   = $request->input('no_transaksi');
        $rental->kode_mobil     = $request->input('car_name');
        $rental->kode_customer  = $request->input('nama_customer');
        $rental->tgl_rental     = $request->input('tgl_rental');
        $rental->tgl_kembali    = $request->input('tgl_kembali');

        $rental->update();
        return redirect('/rental')->with('sukses','Data updated successfully'); 
    }

    public function delete($id)
    {
        $rental = Rental::find($id);
        $rental->delete($rental);
        return redirect('/rental')->with('sukses','Data has been deleted'); 
    }
    public function transaction(Request $request){
        $no_transaksi = $request->input('no_transaksi');
        $check = Rental::where('no_transaksi', $no_transaksi)->count();

        if ($check > 0) {
            echo "false";
        } else {
            echo "true";
        }
    }

}
