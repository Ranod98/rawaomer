<?php



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function (){

        Route::get('/index','DashboardController@index')->name('index');

        //user route
        Route::resource('users','UserController')->except(['show']);

        //team route
        Route::resource('teams','TeamController');

        //type route
        Route::resource('types','TypeController')->except(['show']);;

    });// end of dashboard routes


});



