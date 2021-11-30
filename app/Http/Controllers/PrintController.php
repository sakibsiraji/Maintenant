<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PrintController extends Controller
{
    public function print($id){
//         header('Content-type: application/pdf');
// header('Content-Disposition: inline; filename="document.pdf"');
// header('Content-Transfer-Encoding: binary');
        $data=Bill::find($id);
        $flat=DB::table('flats')->select('flat_name')->where('id',$data->flat_id)->first();
        $tenant=DB::table('tenants')->select('name')->where('id',$data->tenant_id)->first();
        // $pdf = view('BillsPrint', $data)->render();
        // return @\PDF::loadHTML($pdf, 'utf-8')->stream();
        $pdf = PDF::loadView('BillsPrint',['bill'=>$data,'flat'=>$flat,'tenant'=>$tenant]);

        return $pdf->stream('bills.pdf');
        // return view('BillsPrint',['bill'=>$data,'flat'=>$flat,'tenant'=>$tenant]);

    }
}
