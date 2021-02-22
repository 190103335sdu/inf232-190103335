<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');//returns example view
});

Route::get('/test/{var1}/{var2}', function ($var1=null, $var2=null) {
    return $var1." + ".$var2." = ".($var1 + $var2);
})->where(['var1'=>'[0-9]+','var2'=>'[0-9]+']);
//1st commit
//2nd commit
//3rd commit