<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad02_2Controller extends Controller
{
    //
    public function index(){
        $url = array( 'yahoo' => 'https://www.yahoo.co.jp/', 'google' => 'https://www.google.co.jp/',
'msn' => 'https://www.msn.com/ja-jp' );
        $message = "各ページに移動します";
        return view('kad02_2',["message"=>$message,'url' => $url]);
    }
}
