<?php

namespace App\Http\Controllers;
use App\Models\Emergency;
use Illuminate\Http\Request;

class emergency_boardControlloer extends Controller
{
    //
    public function index(){
        if(session('user_name') == ""){
            return redirect('/emergency/sec');
        }
        //echo session('user_name');
        $data = Emergency::all();
        return view('emergency.board_sec',compact('data'));
    }
    public function add(){
        if(session('user_name') == ""){
            return redirect('/emergency/sec');
        }
        return view('emergency.board_add');
    }
    public function ins(Request $request){
        if(session('user_name') == ""){
            return redirect('/emergency/sec');
        }else{
            
            if($request->check_name == "" || $request->situation){
                return redirect('emergency/board_add');
            }else{
                $article = new Emergency;
                $article->user_name = session('user_name');
                $article->mail = session('mail');
                $article->check_name = $request->check_name;
                $article->situation = $request->situation;
                $article->save();
                return redirect('/emergency/bord');
            }
        }
    }
}
