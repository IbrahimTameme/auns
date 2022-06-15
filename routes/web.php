<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EldersController;

use App\Http\Controllers\contact;

use App\Http\Controllers\TestController;
use App\Http\Controllers\NewController;



use Illuminate\Support\Facades\Auth;

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


////////////////////////////////////////////////

Route::get('log', [NewController::class, 'displaylogin'] );
Route::get('Dashbord', [NewController::class, 'displaydash']);
Route::get('Users', [NewController::class, 'displayUsers']);
Route::get('Requets', [NewController::class, 'displayRequests']);
Route::get('acceptuser/id/{id}', [NewController::Class,'acceptuser']);
Route::get('utable', [NewController::class, 'displayUTables'] );
Route::get('stable', [NewController::class, 'displaySTables'] );
Route::get('utable', [NewController::Class,'viewData']);
Route::get('/deleteUser/id/{id}', [NewController::class, 'deleteData']);
Route::get('create', [NewController::Class,'Viewadd']);
Route::post('create', [NewController::class, 'insert_user']);
Route::get('/editus/id/{id}', [NewController::class, 'editData']);
Route::put('/updateus/id/{id}', [NewController::class, 'updateData']);
Route::get('etable', [NewController::class, 'displayETables'] );
Route::get('etable', [NewController::Class,'viewElderData']);
Route::get('createElder', [NewController::Class,'Viewaddd']);
Route::post('createElder', [NewController::class, 'createElderData']);
Route::get('/delete/id/{id}', [NewController::class, 'deleteElderData']);
Route::get('/edit/id/{id}', [NewController::class, 'editElderData']);
Route::put('/updateElder/id/{id}', [NewController::class, 'updateElderData']);
Route::post('log', [NewController::Class, 'viewlogindata']);
Route::get('Dashbord',  [NewController::class, 'showdynamicdata']);
Route::get('PendingUsers',  [NewController::class, 'displayPenUsers']);
Route::get('PendingRequests',  [NewController::class, 'displayPenReq']);
Route::get('PendingUsers', [NewController::Class,'viewdashData']);
Route::get('PendingRequests', [NewController::Class,'viewdashreqData']);
Route::get('acceptreq/id/{id}', [NewController::Class,'Acceptreq']);
Route::get('/denyUser/id/{id}', [NewController::class, 'denyData']);
Route::get('/denyreq/id/{id}', [NewController::class, 'denyreq']);





////////////////////////////////////////////////



Route::get('/',  [TestController::class, 'landing_page']);
Route::get('/signup', function () {
    return view('sign');
});
Route::get('/ho', function () {
    return view('layouts.landingpage');
});


Route::get('/addItem', function () {
    return view('addpic');
});

Route::post('/sign',[TestController::class, 'insert_user']);
// Route::post('form', [TestController::Class, 'form_validate'])-> middleware('CheckUser')  ;
Route::post('/form',[TestController::class, 'form_validate']);


Route::get('/Contactus', function () {
    return view('layouts.Contactus');
});

Route::get('/About', function () {
    return view('layouts.Aboutus');
});
Route::post('user/id/{id}',  [TestController::class, 'user']);
Route::get('request',  [TestController::class, 'request']);

Route::get('/Events', function () {
    return view('layouts.Events');
});



Route::get('contact', [contact::Class,'Viewadd']);
Route::post('contacts', [contact::class, 'contacts']);



Route::post('/added',  [TestController::class, 'editPic']);
Route::post('/updateuser',  [TestController::class, 'updateuser']);



Route::post('/request',[TestController::class, 'insert_request']);

Route::get('/show_request',[TestController::class, 'show_request']);

Route::get('/delete_job/id/{user_id}',[TestController::class, 'delete_job']);




Route::get('accept_request/id/{user_id}/{elder_id}',[TestController::class, 'accept_request']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/added',  [TestController::class, 'editPic']);
Route::post('/updateuser',  [TestController::class, 'updateuser']);






