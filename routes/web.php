<?php

use Illuminate\Support\Facades\Route;
use App\Home2;
use App\Service1;
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
    $homes2 = Home2::all();
    $services1 = Service1::all();
    return view('index', compact('homes2', 'services1'));
});

Route::group(['middleware' => ['auth']], function(){

    Route::get('/admin', function(){
        return view('admin/index');
    });
   
    Route::resource('/admin/home', 'Home2Controller');

    Route::resource('/admin/service1', 'Service1Controller');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
