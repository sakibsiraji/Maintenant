<?php

namespace App\Http\Controllers;

use App\Models\flatModel;
use App\Models\Owner;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class flatController extends Controller
{
    function create(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Owner::all();
        return view('create_flat',['owners'=>$data]);
    }
    function store(Request $request){
        $flat_name=$request->input('flat_name');
        $owner_id=$request->input('owner_id');
        $beds=$request->input('beds');
        $baths=$request->input('baths');
        // $garages=$request->input('garages');
        $garage_bill=$request->input('garage_bill');
        $size=$request->input('size');
        $rent=$request->input('rent');
        $service_charge=$request->input('service_charge');
        $monthly_water_bill=$request->input('monthly_water_bill');
        $monthly_gas_bill=$request->input('monthly_gas_bill');
        $location=$request->input('location');
        $file = $request->file('image');
        if(!$file==null){

        $filename = time() . '.' . $file->extension();
        $file->move('images',$filename);
        }else{
            $filename="";
        }



        $comment=$request->input('comment');

        $result=DB::table('flats')->insert([
            'flat_name'=>$flat_name,
            'owner_id'=>$owner_id,
            'beds'=>$beds,
            'baths'=>$baths,
            // 'garages'=>$garages,
            'garage_bill'=>$garage_bill,
            'size'=>$size,
            'rent'=>$rent,
            'service_charge'=>$service_charge,
            'monthly_water_bill'=>$monthly_water_bill,
            'monthly_gas_bill'=>$monthly_gas_bill,
            'location'=>$location,
            'image'=>$filename,
            'comment'=>$comment,
        ]);

        if($result==true){
            return view('success');
        }
    }
    function show(){
        $data=DB::table('flats')->where('available',1)->get();
            return view('welcome',['flats'=>$data]);
    }
    function flatview(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=flatModel::all();
            return view('flatview',['flats'=>$data]);
    }
    function flatDetails(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=flatModel::all();
            return view('flat_details',['flats'=>$data]);
    }

    function edit(Request $req){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=flatModel::find($req->id);
        $data->beds =$req->input('beds');
        $data->baths =$req->input('baths');
        // $data->garages =$req->input('garages');
        $data->garage_bill =$req->input('garage_bill');
        $data->size =$req->input('size');
        $data->rent =$req->input('rent');
        $data->service_charge =$req->input('service_charge');
        $data->monthly_water_bill =$req->input('monthly_water_bill');
        $data->monthly_gas_bill =$req->input('monthly_gas_bill');
        $data->garage_bill =$req->input('garage_bill');
        $file = $req->file('image');
        $data->location =$req->input('location');
        if(!$file==null){

        $filename = time() . '.' . $file->extension();
        $file->move('images',$filename);
        $data->image=$filename;
        }


        //$extension = $file->getClientOriginalExtension(); // getting image extension




        $data->comment =$req->input('comment');
        $data->save();
        return back()->with('success','Data Updated');
    }

    public function available($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        // $data=Tenant::where('flat_id',$id)->get();
        // $data->flat_id=null;
        $data1=flatModel::find($id);
        // return $data;
        $data1->available=1;
        // $data->save();
        $data1->save();

        return redirect('flat_view');
    }
    public function unavailable($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data1=DB::table('flats')->where('id',$id)->get();

        return view('new_tenant',['flats'=>$data1]);
    }

}
