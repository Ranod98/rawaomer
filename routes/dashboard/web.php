<?php



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::prefix('dashboard')->name('dashboard.')->group(function (){

        Route::get('/index','DashboardController@index')->name('index');

    });// end of dashboard routes


});



