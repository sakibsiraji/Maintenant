<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\flatModel;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class tenantLoginController extends Controller
{
    function login(Request $req){
        $result=Tenant::where('email',$req->email)->where('password',$req->password)->get();
        if(count($result)>0){
            $req->session()->put('tenant_id',$result[0]->id);
            $req->session()->put('tenant_name',$result[0]->name);
            return redirect('TenantBillsByYear');
        }
        else{
            session::flash('coc','Email and Password not match');
            return redirect('tenant')->withInput();
        }
    }
    function show(Request $req,$id1,$id2){
        // $capsule=array('bills'=>$data,'username'=>$username);
        if(!session()->has('tenant_id')){
            return redirect('tenant');
        }
        $data=DB::table('bills')->where('tenant_id',$req->session()->get('tenant_id'))->where('billing_year',$id1)->where('billing_month',$id2)->get();


        return view('tenantbillview',['bills'=>$data]);
    }
    public function monthly_bills(Request $req,$year){
        if(!session()->has('tenant_id')){
            return redirect('tenant');
        }

        $data=DB::table('bills')->where('tenant_id',$req->session()->get('tenant_id'))->select('billing_year','billing_month')->where('billing_year',$year)->distinct()->orderBy('billing_month')->get();
        return view('TenantBillByMonth',['bills'=>$data]);
    }
    public function yearly_bills(Request $req){
        if(!session()->has('tenant_id')){
            return redirect('tenant');
        }
        $data=DB::table('bills')->where('tenant_id',$req->session()->get('tenant_id'))->select('billing_year')->distinct('billing_year')->orderByDesc('billing_year')->get();
        return view('TenantBillByYear',['bills'=>$data]);
    }
}
