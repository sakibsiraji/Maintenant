<?php

use App\Http\Controllers\BillsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\flatController;
use App\Http\Controllers\myinfoController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\tenantLoginController;
use App\Http\Controllers\TenantsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('contact', function () {
    if(!session()->has('tenant_id')){
        return redirect('tenant');
    }
    return view('contact');
});

Route::get('/',[flatController::class,'show']);
Route::get('create_flat',[flatController::class,'create']);
Route::post('flat_edit',[flatController::class,'edit']);


Route::get('owner', function () {
    return view('ownerlogin');
});
Route::post('OwnerLogin',[UserController::class,'login']);
Route::post('tenantLogin',[tenantLoginController::class,'login']);
Route::get('tenant', function () {
    return view('tenantlogin');
});
Route::get('userlogout', function () {
    session()->forget('user_name');
    return view('ownerlogin');
});
Route::get('tenantlogout', function () {
    session()->forget('tenant_id','tenant_name');
    return view('tenantlogin');
});




Route::get('notice',[NoticesController::class,'show']);
Route::get('owner_notice_view',[NoticesController::class,'ownernotice']);
Route::post('notice_edit', [NoticesController::class,'update']);
Route::get('notice/delete/{id}',[NoticesController::class,'delete']);

Route::get('owner-dashboard', function () {
    if(!session()->has('user_name')){
        return redirect('owner');
    }
    return view('ownerdashboard');
});
Route::get('create_owner', function () {
    if(!session()->has('user_name')){
        return redirect('owner');
    }
    return view('create_owner');
});

Route::get('owner-notice', function () {
    if(!session()->has('user_name')){
        return redirect('owner');
    }
    return view('ownernotice');
});
Route::post('/owner-notice',[NoticesController::class,'store']);

Route::get('make-new-bill',[BillsController::class,'create']);
Route::post('/bill_edit',[BillsController::class,'edit']);
Route::post('/info_edit',[myinfoController::class,'edit']);
Route::get('/bill/delete/{id}',[BillsController::class,'delete']);
Route::post('/addbill',[BillsController::class,'save']);

Route::get('make-new-tenant',[TenantsController::class,'create']);
Route::get('tenant_view',[TenantsController::class,'show']);
Route::post('tenant_edit',[TenantsController::class,'edit']);
Route::get('tenant/delete/{id}',[TenantsController::class,'delete']);
Route::get('bill_view/{id1}/{id2}',[BillsController::class,'show']);
Route::get('show_message',[ContactsController::class,'show']);
Route::get('createmyinfo', function () {
    return view('createmyinfo');
});
Route::get('show_myinfo/{year}/{month}',[myinfoController::class,'show']);

Route::get('myinfo/delete/{id}',[myinfoController::class,'delete']);
Route::post('/addtenant',[TenantsController::class,'store']);
Route::post('tenant_view',[TenantsController::class,'show']);
Route::post('/addmessage',[ContactsController::class,'save']);

Route::get('bill-list',[BillsController::class,'list']);
Route::post('storemyinfo',[myinfoController::class,'store']);
Route::post('storeflatdetails',[flatController::class,'store']);
Route::post('create_owner',[ownerController::class,'create']);
Route::get('/tenantbillview/{id1}/{id2}',[tenantLoginController::class,'show']);
Route::get('flat_view',[flatController::class,'flatview']);
Route::get('flat-details',[flatController::class,'flatDetails']);
Route::get('paid/{id}',[BillsController::class,'paid']);

Route::get('BillsByYear',[BillsController::class,'BillsByYear']);
Route::get('TenantBillsByYear',[tenantLoginController::class,'yearly_bills']);
Route::get('BillsByMonth/{year}',[BillsController::class,'BillsByMonth']);
Route::get('TenantBillsByMonth/{year}',[tenantLoginController::class,'monthly_bills']);
Route::get('tenant_bill/{id}',[BillsController::class,'tenant_bill']);
Route::get('InfoByYear',[myinfoController::class,'yearly_info']);
Route::get('InfoByMonth/{id}',[myinfoController::class,'monthly_info']);
Route::get('file-download/{filename}',[myinfoController::class,'download']);
Route::get('print/{id}', [PrintController::class,'print']);
Route::get('available/{id}', [flatController::class,'available']);
Route::get('unavailable/{id}', [flatController::class,'unavailable']);
Route::get('create_bill/{id}', [BillsController::class,'flat_bill']);
Route::get('tenant_details/{id}', [TenantsController::class,'tenant_details']);


