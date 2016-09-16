<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//mostit@lagosstate.org.ng
//p:test

//damola 22nd april 2016...friday



Route::auth();

//dashboard routes
Route::get('/dashboard', 'HomeController@index')->name('dashboard_home');
Route::get('/dashboard/main_Content','HomeController@main_content')->name('main_content_editor');
Route::get('/dashboard/other_Content','HomeController@other_content')->name('other_content_editor');
Route::post('/dashboard/M_C_preview','HomeController@mainContent_PB')->name('mainContent_PB');
Route::post('/dashboard/O_C_preview','HomeController@otherContent_PB')->name('otherContent_PB');
Route::post('/dashboard/mainContent/preview','HomeController@mainPreview')->name('main_Preview');
Route::post('/dashboard/otherContent/preview','HomeController@otherPreview')->name('other_Preview');



//sport routes
Route::get('/','sportController@mainContent')->name('sport_home');

Route::get('/main_article', 'sportController@main_article')->name('main_article');
Route::get('/article1', 'sportController@article1')->name('article1');
Route::get('/article2', 'sportController@article2')->name('article2');
Route::get('/article3', 'sportController@article3')->name('article3');
Route::get('/article4', 'sportController@article4')->name('article4');
Route::get('/article5', 'sportController@article5')->name('article5');
Route::get('/article6', 'sportController@article6')->name('article6');


Route::get('/test',function(){
	return view('layouts.sport');
});
