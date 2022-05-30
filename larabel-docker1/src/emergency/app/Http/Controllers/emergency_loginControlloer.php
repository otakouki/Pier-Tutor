<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;

class emergency_loginControlloer extends Controller
{
    //
    public function index() {
        return view('emergency.login');
    }
    public function add() {
        $name = "";
        $mail = "";
        $password = "";
        $department = "";
        return view('emergency.add',compact('name','mail','password','department'));
    }
    public function create(Request $request){
        if($request->user_name == "" || $request->mail == "" || $request->password == "" || $request->department == ""){
            if($request->user_name == ""){
                $name = "";
            }else{
                $name = $request->user_name;
            }
            if($request->mail == ""){
                $mail = "";
            }else{
                $mail = $request->mail;
            }

            if($request->password == ""){
                $password = "";
            }else{
                $password = $request->password;
            }
            if($request->department==""){
                $department = "";
            }else{   
                $department = $request->department;
            }
            return view('emergency.add',compact('name','mail','password','department'));
        }else{
            $article = new Users;
            $article->user_name = $request->user_name;
            $article->mail = $request->mail;
            $article->password = $request->password;
            $article->department = $request->department;
            $article->save();
            return redirect('/emergency/sec');
        }
    }
    public function sec(Request $request){
        $user = Users::all();
        // return view('test',compact('user'))
        foreach ($user as $member) {
            //echo "id:{$member->user_id} name:{$member->user_name}";
            if ($request->password == $member->password){
                session(['user_name' => $member->user_name]);
                session(['mail' => $member->mail]);
                // echo session('user_name');
                return redirect('/emergency/board');
                break;
            }else{
                //return redirect('/emergency/sec');
                
            }
        }
        return redirect('/emergency/sec');

        
    }
    public function logout(){
        session()->flush();
        return redirect('/emergency/sec');
    }
}
