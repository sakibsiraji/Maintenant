<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\flatModel;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BillsController extends Controller
{
    function create(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data1=flatModel::where('available',0)->get();
        // $data2=Tenant::all();
        return view('new_bill',['flats'=>$data1]);
    }
    function flat_bill($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data1=flatModel::where('id',$id)->get();
        // $data2=Tenant::all();
        return view('new_bill',['flats'=>$data1]);
    }
    public function save(Request $request)
    {
        // $tenant_id=$request->input('tenant_id');
        $flat_id=$request->input('flat_id');
        $tenant_id=DB::table('tenants')->where('flat_id',$flat_id)->pluck('id')->first();
        // return $tenant;
        // $tenant_id=$tenant->id;
        $billing_month=$request->input('billing_month');
        $billing_year=$request->input('billing_year');

        $flat=flatModel::find($flat_id);
        $rent=$flat->rent;
        $service_charge=$flat->service_charge;
        $electricity_bill=$request->input('electricity_bill');
        if($request->hasfile('electricity_bill_copy'))
        {
            $file = $request->file('electricity_bill_copy');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/tenants', $filename);
            $electricity_bill_copy = $filename;
        }
        else
        {

            $electricity_bill_copy = '';
        }
        $water_bill=$flat->monthly_water_bil;
        $gas_bill=$flat->monthly_gas_bill;
        $telephone_bill=$request->input('telephone_bill');
        $garage_bill=$flat->garage_bill;
        $total_bill=$rent+$service_charge+$electricity_bill+$water_bill+$garage_bill+$gas_bill+$telephone_bill;
        $is_paid=$request->input('is_paid');
        $comment=$request->input('comment');

        $result=DB::table('bills')->insert([
            'tenant_id'=>$tenant_id,
            'flat_id'=>$flat_id,
            'billing_month'=>$billing_month,
            'billing_year'=>$billing_year,
            'rent'=>$rent,
            'service_charge'=>$service_charge,
            'electricity_bill'=>$electricity_bill,
            'electricity_bill_copy'=>$electricity_bill_copy,
            'water_bill'=>$water_bill,
            'gas_bill'=>$gas_bill,
            'telephone_bill'=>$telephone_bill,
            'garage_bill'=>$garage_bill,
            'total_bill'=>$total_bill,
            'is_paid'=>$is_paid,
            'comment'=>$comment,
        ]);

        $details=[
            'billing_month'=>$billing_month,
            'billing_year'=>$billing_year,
            'rent'=>$rent,
            'service_charge'=>$service_charge,
            'electricity_bill'=>$electricity_bill,
            'electricity_bill_copy'=>$electricity_bill_copy,
            'water_bill'=>$water_bill,
            'gas_bill'=>$gas_bill,
            'telephone_bill'=>$telephone_bill,
            'garage_bill'=>$garage_bill,
            'total_bill'=>$total_bill,
            'comment'=>$comment,
        ];

        $mail=DB::table('tenants')->where('id',$tenant_id)->pluck('email');
        Mail::to($mail)->send(new TestMail($details));

        if($result==true){
            return view('success');
        }


    }

    function show($id1,$id2)
    {
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=DB::table('bills')->where('billing_year',$id1)->where('billing_month',$id2)->get();
        $data1=flatModel::where('available',0)->get();
        $data2=Tenant::all();

        return view('billview',['bills'=>$data,'flats'=>$data1,'tenants'=>$data2]);
    }

    function edit(Request $req){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Bill::find($req->id);
        // $data->tenant_id=$req->input('tenant_id');
        $data->flat_id=$req->input('flat_id');

        $flat_id=$req->input('flat_id');
        $flat=flatModel::find($flat_id);

        $data->tenant_id=DB::table('tenants')->where('flat_id',$flat_id)->pluck('id')->first();
        $data->billing_year =$req->input('billing_year');
        $data->billing_month =$req->input('billing_month');
        $data->rent =$flat->rent;
        $rent =$flat->rent;
        $data->service_charge =$flat->service_charge;
        $service_charge =$flat->service_charge;
        $data->electricity_bill =$req->input('electricity_bill');
        $electricity_bill =$req->input('electricity_bill');
        $data->water_bill =$flat->water_bill;
        $water_bill =$flat->water_bill;
        $data->gas_bill =$flat->gas_bill;
        $gas_bill =$flat->gas_bill;
        $data->telephone_bill =$req->input('telephone_bill');
        $telephone_bill =$req->input('telephone_bill');
        $data->garage_bill =$flat->garage_bill;
        $garage_bill =$flat->garage_bill;
        $data->total_bill =$rent+$service_charge+$electricity_bill+$water_bill+$garage_bill+$gas_bill+$telephone_bill;
        $data->comment =$req->input('comment');
        $data->save();
        $data0=DB::table('bills')->where('id',$req->id)->first();
        $data1=flatModel::all();
        $data2=Tenant::all();

        return view('tenant_bill',['bill'=>$data0,'flats'=>$data1,'tenants'=>$data2])->with('success','Data Updated');

    }
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        DB::table('bills')->delete($id);
        return view('success');

    }

    function paid($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Bill::find($id);
        $data->is_paid=1;
        $data->save();


        $data0=DB::table('bills')->where('id',$id)->first();
        $data1=flatModel::all();
        $data2=Tenant::all();

        return view('tenant_bill',['bill'=>$data0,'flats'=>$data1,'tenants'=>$data2]);;

    }


    public function BillsByYear(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=DB::table('bills')->select('billing_year')->distinct('billing_year')->orderByDesc('billing_year')->get();
        return view('BillsByYear',['bills'=>$data]);
    }

    public function BillsByMonth($year){
        if(!session()->has('user_name')){
            return redirect('owner');
        }

        $data=DB::table('bills')->select('billing_year','billing_month')->where('billing_year',$year)->distinct()->orderBy('billing_month')->get();
        return view('BillsByMonth',['bills'=>$data]);
    }

    public function tenant_bill($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }

        $data=DB::table('bills')->where('id',$id)->first();
        $data1=flatModel::where('available',0)->get();
        $data2=Tenant::all();

        return view('tenant_bill',['bill'=>$data,'flats'=>$data1,'tenants'=>$data2]);
    }

    
}
