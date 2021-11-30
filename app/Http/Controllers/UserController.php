<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    function login(Request $req){
        $result=User::where('email',$req->email)->where('password',$req->password)->get();
        if(count($result)>0){
            
           $req->session()->put('user_name',$result[0]->name);
            return redirect('owner-dashboard');
        }
        else{
            session::flash('coc','Email and Password not match');
            return redirect('/')->withInput();
        }
    }


}
