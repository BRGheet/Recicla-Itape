<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    public function SendMail(){
    	Mail::send(['text'=>'site.emails.teste'],['name','Miqueias'],function($message){
			$message->to('reciclaitape@gmail.com','teste')->subject('Teste  Email');

			$message->from('reciclaitape@gmail.com','teste');
	});






    	/*return view('Site.emails.teste');*/
    }
}
