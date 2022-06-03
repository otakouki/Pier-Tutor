<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad02_1Controller extends Controller
{
    //
    public function index(){
        $lang = array('PHP', 'JSP', 'Ruby', 'Perl', 'Python');
        $message = "これはコントローラーからブレードに渡したメッセージです。";
        return view('kad02_1',["message"=>$message,'lang' => $lang]);
    }
}
