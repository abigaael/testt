<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $fillable = ['id','car_name','type','brand','no_polisi','warna','harga_sewa','kode_mobil'];

    public function rental()
	{
    	return $this->hasMany('App\Model\Rental', 'kode_mobil', 'kode_mobil');
	}

}		
