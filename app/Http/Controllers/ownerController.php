<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ownerController extends Controller
{
    function create(Request $req){

        $name=$req->input('name');

        $result=DB::table('owner')->insert([
            'name'=>$name,
        ]);
        if($result==true){
            return view('success');
        }
    }
}
