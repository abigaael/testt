<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['id','nama_customer','jenis_kelamin','alamat','no_hp','kode_customer']; 

    public function customer()
	{
    	return $this->hasMany('App\Model\Customer', 'kode_customer', 'kode_customer');

	}
}



