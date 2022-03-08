<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/send', function (\Illuminate\Http\Request $request) {
    //return $request->all();
    $name = $request['name'];
    $phone = $request['Phone'];
    $email = $request['email'];
    $subject = $request['Subject'];
    $message = $request['message'];


    $msg = "Name : $name,\n Phone: $phone ,\n Email : $email ,\n Subject : $subject ,\n Message : $message";

    mail("saiful013101@gmail.com", "Portfolio Website Message", $msg);

    Alert::success('Congrats', 'Your Message Successfully Send');

    return back();
});
