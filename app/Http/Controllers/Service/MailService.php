<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailService extends Controller
{
    public static function sendMailCustomer($data){
    	Mail::send('email.emailcustomer',array(
    		'data' => $data
    	), function ($c) use ($data)
    	{
    		$c->to($data->email);
    		$c->from('noreplay@gmail.com', 'PT Sentosa Jaya');
    		$c->subject('New Data Customer'); 
    	});

    }
    public static function updateMailCustomer($edot){
    	Mail::send('email.emailupdate',array(
    		'edot' => $edot
    	), function ($u) use ($edot)
    	{
    		$u->to($edot->email);
    		$u->from('noreplay@gmail.com', 'PT Sentosa Jaya');
    		$u->subject('New Data Customer'); 
    	});

    }
}
