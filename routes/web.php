<?php

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
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;




Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController@index')->name('trangchu');

    Route::get('/chitiet', 'HomeController@getchitiet')->name('chitiet');


    //page
    Route::get('/affiliate', 'HomeController@getaffiliate')->name('affiliate');
    Route::get('/domain-hosting', 'HomeController@gethost')->name('host');
    Route::get('/share-code', 'HomeController@getsharecode')->name('sharecode');
    Route::get('/tool-facebook', 'HomeController@gettoolfb')->name('toolfb');
  
});
