<?php

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/email', function(){
    $details['email']= 'ayazahmad0833@gmail.com';
    dispatch(new SendEmail($details));
    dd('done');
});
Route::get('/sendmail',[Controller::class, 'send']);