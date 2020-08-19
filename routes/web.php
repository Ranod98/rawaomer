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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['register'=>false,['verify'=>true]]);

Route::get('/',function (){

    return view('frontend.index');

});
//frontend route
Route::get('/','FrontendController@index')->name('frontend.index');
Route::get('/about','FrontendController@about')->name('frontend.about');
Route::get('/project','FrontendController@project')->name('frontend.project');
Route::get('/project/detail/{Project}','FrontendController@detail')->name('frontend.detail');

Route::get('/team','FrontendController@team')->name('frontend.team');
Route::get('/contact','Dashboard\FeedbackController@create')->name('contact.create');
Route::POST('/contact/store','Dashboard\FeedbackController@store')->name('contact.store');
Route::get('/team/{team}','FrontendController@teamProject')->name('frontend.teamproject');



Route::get('/home', 'HomeController@index')->name('home');
