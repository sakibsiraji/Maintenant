<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
        function save(Request $req){

            $name=$req->input('name');
            $email=$req->input('email');
            $message=$req->input('message');

            $result=DB::table('contacts')->insert([
                'name'=>$name,
                'email'=>$email,
                'message'=>$message,
            ]);
            if($result==true){
                return redirect('contact')->with('msg','Message Sent Successfully');
            }
        }

        function show(){
            if(!session()->has('user_name')){
                return redirect('owner');
            }
            $data=Contact::all();
            return view('show_message',['messages'=>$data]);
        }
}
