<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table ='rental';
    protected $fillable =['id','no_transaksi','kode_customer','kode_mobil','tgl_rental','tgl_kembali'];

     public function mobil()
	{
    	return $this->belongsTo('App\Model\Mobil', 'kode_mobil', 'kode_mobil');
	}

	 public function customer()
	{
    	return $this->belongsTo('App\Model\Customer', 'kode_customer', 'kode_customer');
	}
}
