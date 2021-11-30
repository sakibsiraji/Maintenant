<?php

namespace App\Http\Controllers;

use App\Models\flatModel;
use App\Models\Owner;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantsController extends Controller
{
    function create(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data1=DB::table('flats')->where('available',1)->get();

        return view('new_tenant',['flats'=>$data1]);
    }
    public function store(Request $request)
    {


        $flat_id = $request->input('flat_id');
        // $owner_id=$request->input('owner_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        if($request->hasfile('nid'))
        {
            $file = $request->file('nid');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/tenants', $filename);
            $nid = $filename;
        }
        else
        {

            $nid = '';
        }

        $phone = $request->input('phone');
        $fathers_name = $request->input('fathers_name');
        $mothers_name = $request->input('mothers_name');

        if($request->hasfile('parents_nid'))
        {
            $file = $request->file('parents_nid');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/tenants', $filename);
            $parents_nid = $filename;
        }
        else
        {

            $parents_nid = '';
        }
        $data=flatModel::find($flat_id);
        $data->available=0;
        $data->save();
        $occupation = $request->input('occupation');
        $job_address = $request->input('job_address');
        $office_phone = $request->input('office_phone');
        $staying_people = $request->input('staying_people');
        $earning_person_name = $request->input('earning_person_name');
        $earning_person_occupation = $request->input('earning_person_occupation');
        $earning_person_job_address = $request->input('earning_person_job_address');
        $earning_person_office_phone = $request->input('earning_person_office_phone');
        $earning_person_yearly_income = $request->input('earning_person_yearly_income');
        $starting_date = $request->input('starting_date');
        $advance = $request->input('advance');
        $comment = $request->input('comment');


        $result=DB::table('tenants')->insert([
            'flat_id'=>$flat_id,
            // 'owner_id'=>$owner_id,
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'nid'=>$nid,
            'phone'=>$phone,
            'fathers_name'=>$fathers_name,
            'mothers_name'=>$mothers_name,
            'parents_nid'=>$parents_nid,
            'occupation'=>$occupation,
            'job_address'=>$job_address,
            'office_phone'=>$office_phone,
            'staying_people'=>$staying_people,
            'earning_person_name'=>$earning_person_name,
            'earning_person_occupation'=>$earning_person_occupation,
            'earning_person_job_address'=>$earning_person_job_address,
            'earning_person_office_phone'=>$earning_person_office_phone,
            'earning_person_yearly_income'=>$earning_person_yearly_income,
            'starting_date'=>$starting_date,
            'advance'=>$advance,
            'comment'=>$comment,
        ]);
        if($result==true){
            return view('success');
        }


    }

    function show(){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Tenant::all();
        $data1=flatModel::all();
        return view('tenantview',['tenants'=>$data,'flats'=>$data1]);
    }

    function edit(Request $request){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $data=Tenant::find($request->id);

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $nid = $request->file('nid');
        if(!$nid==null)
        {

            $extension = $nid->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $nid->move('uploads/files', $filename);
            $data->parents_nid = $filename;
        }
        $data->phone = $request->input('phone');
        $data->fathers_name = $request->input('fathers_name');
        $data->mothers_name = $request->input('mothers_name');
        $parents_nid = $request->file('parents_nid');
        if(!$parents_nid==null)
        {

            $extension = $parents_nid->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $parents_nid->move('uploads/files', $filename);
            $data->parents_nid = $filename;
        }
        $data->occupation = $request->input('occupation');
        $data->job_address = $request->input('job_address');
        $data->office_phone = $request->input('office_phone');
        $data->staying_people = $request->input('staying_people');
        $data->earning_person_name = $request->input('earning_person_name');
        $data->earning_person_occupation = $request->input('earning_person_occupation');
        $data->earning_person_job_address = $request->input('earning_person_job_address');
        $data->earning_person_office_phone = $request->input('earning_person_office_phone');
        $data->earning_person_yearly_income = $request->input('earning_person_yearly_income');
        $data->starting_date = $request->input('starting_date');
        $data->advance = $request->input('advance');
        $data->comment = $request->input('comment');
        $data->save();
        return redirect('tenant_view')->with('success','Data Updated');
    }
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('owner');
        }
        $tenant=Tenant::find($id);
        $tenant->delete();
        return redirect('tenant_view');

    }

    public function tenant_details($id){
        
    }
}
