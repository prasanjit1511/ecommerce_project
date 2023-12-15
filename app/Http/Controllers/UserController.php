<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function login(Request $req){
        $uName = $req->has('uname')?$req->get('uname'):'';
        $pass = $req->has('pass')?$req->get('pass'):'';

        $userInfo = User::where('name','=',$uName)->where('password','=',$pass)->first();

        if(isset($userInfo) && $userInfo!=null){
             return redirect('/admin_products');
        }else{
            return redirect()->back();
        }
        
    }


    public function register(Request $req){
        // return $req->all();

        User::insert([
            'name'=>$req->has('uname')? $req->get('uname'):'',
            'email'=>$req->has('email')? $req->get('email'):'',
            'mobile'=>$req->has('mobile')? $req->get('mobile'):'',
            'password'=>$req->has('pass')? $req->get('pass'):'',
            
            
        ]);
        return redirect('/admin_products');
        // return redirect()->route('home'); 

    }


   
    
}
