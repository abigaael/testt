<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Rental;
use App\Http\Controllers\Service\MailService;

class ListCustomerController extends Controller
{
    public function index()
    {   
        $data_customer = Customer::all();
        return view('customer.listcustomer',['data_customer' => $data_customer,'data_rental => $data_rental']);
    }

    public function create(Request $request)
    {
        // return $request->all();
        $StoreCustomer                  = new Customer();
        $StoreCustomer->nama_customer   = $request->input('nama_customer');
        $StoreCustomer->jenis_kelamin   = $request->input('jenis_kelamin');
        $StoreCustomer->alamat          = $request->input('alamat');
        $StoreCustomer->no_hp           = $request->input('no_hp');
        $StoreCustomer->kode_customer   = $request->input('kode_customer');
        $StoreCustomer->email           = $request->input('email');
        
        $StoreCustomer->save();

        //send email to customer
        $sendMailCust = MailService::sendMailCustomer($StoreCustomer);
        // Mobil::create($request->all());
        return redirect ('/customer')->with('Success','Data Entered Successfully!');
        
    }

    public function edit($id)
    {
        $customer = Customer::find($id); 
        return view('customer/edit',['customer' => $customer]);
    }

    public function update(Request $request,$id)
    {
        $customer = Customer::find($id);
        // $customer->update($request->all());
        $customer                   = customer::find($id);
        $customer->nama_customer    = $request->input('nama_customer');
        $customer->jenis_kelamin    = $request->input('jenis_kelamin');
        $customer->alamat           = $request->input('alamat');
        $customer->no_hp            = $request->input('no_hp');
        $customer->kode_customer    = $request->input('kode_customer');
        $customer->update();
        $sendMailCust = MailService::updateMailCustomer($customer);
        return redirect('/customer')->with('sukses','Data updated successfully'); 
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete($customer);
        return redirect('/customer')->with('sukses','Data has been deleted'); 
    }
}
