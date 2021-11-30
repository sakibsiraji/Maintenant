<?php

namespace App\Http\Controllers;

use App\Models\myinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myinfoController extends Controller
{
    public function store(Request $request){

        $billing_month=$request->input('billing_month');
        $billing_year=$request->input('billing_year');
        if($request->hasfile('electricity_bill1'))
        {
            $file = $request->file('electricity_bill1');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $electricity_bill1 = $filename;
        }
        else
        {

            $electricity_bill1 = '';
        }
        if($request->hasfile('electricity_bill2'))
        {
            $file = $request->file('electricity_bill2');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $electricity_bill2 = $filename;
        }
        else
        {

            $electricity_bill2 = '';
        }
        if($request->hasfile('electricity_bill3'))
        {
            $file = $request->file('electricity_bill3');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $electricity_bill3 = $filename;
        }
        else
        {

            $electricity_bill3 = '';
        }
        if($request->hasfile('electricity_bill4'))
        {
            $file = $request->file('electricity_bill4');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $electricity_bill4 = $filename;
        }
        else
        {

            $electricity_bill4 = '';
        }
        if($request->hasfile('electricity_bill5'))
        {
            $file = $request->file('electricity_bill5');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $electricity_bill5 = $filename;
        }
        else
        {

            $electricity_bill5 = '';
        }
        if($request->hasfile('telephone_bill'))
        {
            $file = $request->file('telephone_bill');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $telephone_bill = $filename;
        }
        else
        {

            $telephone_bill = '';
        }
        if($request->hasfile('gass_bill'))
        {
            $file = $request->file('gass_bill');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $gass_bill = $filename;
        }
        else
        {

            $gass_bill = '';
        }
        if($request->hasfile('water_bill'))
        {
            $file = $request->file('water_bill');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $water_bill = $filename;
        }
        else
        {

            $water_bill = '';
        }
        if($request->hasfile('building_tax'))
        {
            $file = $request->file('building_tax');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $building_tax = $filename;
        }
        else
        {

            $building_tax = '';
        }
        if($request->hasfile('land_tax'))
        {
            $file = $request->file('land_tax');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/files', $filename);
            $land_tax = $filename;
        }
        else
        {

            $land_tax = '';
        }


        $result=DB::table('owner_info')->insert([
            'month'=>$billing_month,
            'year'=>$billing_year,
            'electricity_bill1'=>$electricity_bill1,
            'electricity_bill2'=>$electricity_bill2,
            'electricity_bill3'=>$electricity_bill3,
            'electricity_bill4'=>$electricity_bill4,
            'electricity_bill5'=>$electricity_bill5,
            'telephone_bill'=>$telephone_bill,
            'gass_bill'=>$gass_bill,
            'water_bill'=>$water_bill,
            'building_tax'=>$building_tax,
            'land_tax'=>$land_tax,

        ]);
        if($result==true){
            return view('success');
        }

    }

    function show($year,$month){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=DB::table('owner_info')->where('year',$year)->where('month',$month)->first();
        return view('show_myinfo',['info'=>$data]);
    }

    function edit(Request $request){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=myinfo::find($request->id);
        $electricity_bill1 = $request->file('electricity_bill1');
        $electricity_bill2 = $request->file('electricity_bill2');
        $electricity_bill3 = $request->file('electricity_bill3');
        $electricity_bill4 = $request->file('electricity_bill4');
        $electricity_bill5 = $request->file('electricity_bill5');
        $telephone_bill = $request->file('telephone_bill');
        $gass_bill = $request->file('gass_bill');
        $water_bill = $request->file('water_bill');
        $building_tax = $request->file('building_tax');
        $land_tax = $request->file('land_tax');
        if(!$electricity_bill1==null)
        {

            $extension = $electricity_bill1->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $electricity_bill1->move('uploads/files', $filename);
            $data->electricity_bill1 = $filename;
        }

        if(!$electricity_bill2==null)
        {

            $extension = $electricity_bill2->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $electricity_bill2->move('uploads/files', $filename);
            $data->electricity_bill2 = $filename;
        }

        if(!$electricity_bill3==null)
        {

            $extension = $electricity_bill3->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $electricity_bill3->move('uploads/files', $filename);
            $data->electricity_bill3 = $filename;
        }

        if(!$electricity_bill4==null)
        {

            $extension = $electricity_bill4->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $electricity_bill4->move('uploads/files', $filename);
            $data->electricity_bill4 = $filename;
        }

        if(!$electricity_bill5==null)
        {

            $extension = $electricity_bill5->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $electricity_bill5->move('uploads/files', $filename);
            $data->electricity_bill5 = $filename;
        }

        if(!$telephone_bill==null)
        {

            $extension = $telephone_bill->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $telephone_bill->move('uploads/files', $filename);
            $data->telephone_bill = $filename;
        }

        if(!$gass_bill==null)
        {

            $extension = $gass_bill->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $gass_bill->move('uploads/files', $filename);
            $data->gass_bill = $filename;
        }

        if(!$water_bill==null)
        {

            $extension = $water_bill->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $water_bill->move('uploads/files', $filename);
            $data->water_bill = $filename;
        }

        if(!$building_tax==null)
        {

            $extension = $building_tax->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $building_tax->move('uploads/files', $filename);
            $data->building_tax = $filename;
        }

        if(!$land_tax==null)
        {

            $extension = $land_tax->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $land_tax->move('uploads/files', $filename);
            $data->land_tax = $filename;
        }


        return back()->with('msg','Data Updated Successfully');
    }
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=myinfo::find($id);
        $data->delete();
        return view('success');

    }

    public function yearly_info(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=DB::table('owner_info')->select('year')->distinct('year')->orderByDesc('year')->get();
        return view('InfoByYear',['infos'=>$data]);
    }
    public function monthly_info($year){
        if(!session()->has('user_name')){
            return redirect('owner');
        }

        $data=DB::table('owner_info')->where('year',$year)->orderBy('month')->get();
        return view('InfoByMonth',['infos'=>$data]);
    }

    public function download($filename){

        return response()->download('uploads/files/'.$filename);
    }

}
