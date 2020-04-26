<?php

use Illuminate\Support\Facades\Route;
use App\Home2;
use App\Service1;
use App\About;
use App\About2;
use App\Service2;
use App\Service3;
use App\Portfolio;
use App\Team1;
use App\Team2;
use App\Contact1;
use App\Contact2;
use App\Contact3;

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
    $abouts = About::all();
    $abouts2 = About2::all();
    $services2 = Service2::all();
    $services3 = Service3::all();
    $portfolios = Portfolio::all();
    $teams1 = Team1::all();
    $teams2 = Team2::all();
    $contacts1 = Contact1::all();
    $contacts2 = Contact2::all();
    $contacts3 = Contact3::all();

    return view('index', compact('homes2', 'services1', 'abouts', 'abouts2', 'services2', 'services3', 'portfolios', 'teams1', 'teams2', 'contacts1', 'contacts2', 'contacts3'));
});

Route::group(['middleware' => ['auth']], function(){

    Route::get('/admin', function(){
        return view('admin/index');
    });
   
    Route::resource('/admin/home', 'Home2Controller');

    Route::resource('/admin/service1', 'Service1Controller');

    Route::resource('/admin/about', 'AboutController');

    Route::resource('/admin/about2', 'About2Controller');

    Route::resource('/admin/service2', 'Service2Controller');

    Route::resource('/admin/service3', 'Service3Controller');

    Route::resource('/admin/portfolio', 'PortfolioController');

    Route::resource('/admin/team1', 'Team1Controller');

    Route::resource('/admin/team2', 'Team2Controller');

    Route::resource('/admin/contact1', 'Contact1Controller');

    Route::resource('/admin/contact2', 'Contact2Controller');

    Route::resource('/admin/contact3' , 'Contact3Controller');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
