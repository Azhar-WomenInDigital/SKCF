<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
//Frontend Routes
Route::get('/','Frontend\WebController@index');
//Backend Routes
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Backend','middleware'=>['auth','admin']], function (){
    // Admin Dashboard and profile settings route
    Route::get('dashboard','AdminDashboardController@dashboard')->name('dashboard');
    Route::get('account-setting','AccountSettingController@accountSetting')->name('account.setting');
    Route::put('account-update','AccountSettingController@accountUpdate')->name('account.update');
    Route::put('password-update','AccountSettingController@passwordUpdate')->name('password.update');
    // Banner 
    Route::resource('banner','BannerController');
    // Team
    Route::resource('team','TeamController');
    // Charitable Program 
    Route::resource('charitable-program', 'CharitableProgramsController');
    //Useful Pages Route
    Route::get('starter-page','UseFullPagesController@starterPage')->name('starter.page');
    Route::get('error-404','UseFullPagesController@error404')->name('error.404');
    Route::get('error-500','UseFullPagesController@error500')->name('error.500');
    Route::get('invoice','UseFullPagesController@invoice')->name('invoice');
    Route::get('design-basic','UseFullPagesController@designBasic')->name('design.basic');
    Route::get('icons','UseFullPagesController@icons')->name('icons');
    Route::get('form','UseFullPagesController@form')->name('form');
    //All Data tables routes
    Route::get('all-data-table','UseFullPagesController@allDataTable')->name('all.data.table');
    //The data table has been implemented with sweetalert and delete functionalities route
    Route::get('data-table','UseFullPagesController@dataTable')->name('data.table');
    Route::delete('table-delete/{id}','UseFullPagesController@tableDelete')->name('table.delete');
});
//User Or Author Routes
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','AuthorDashboardController@dashboard')->name('dashboard');
});


