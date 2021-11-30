<?php

namespace App\Http\Controllers;
Use Alert;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class NoticesController extends Controller
{

    public function store(Request $req)
    {
        $title=$req->input('title');
        $notice=$req->input('notice');

        $result=DB::table('notices')->insert([
            'title'=>$title,
            'notice'=>$notice
        ]);
        if($result==true){
            return view('success');
        }





    }

    function show(){
        if(!session()->has('tenant_id')){
            return redirect('tenant');
        }
        $data=Notice::all();
        return view('notice',['notices'=>$data]);
    }

    function ownernotice(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Notice::all();
        return view('owner_notice_view',['notices'=>$data]);
    }
    function update(Request $req){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Notice::find($req->id);
        $data->title=$req->input('title');
        $data->notice=$req->input('notice');
        $data->save();
        return redirect('owner_notice_view')->with('success','Data Updated');
    }
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $notice=Notice::find($id);
        $notice->delete();
        return redirect('owner_notice_view');

    }
}
?>
