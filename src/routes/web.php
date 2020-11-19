<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Pro\Bridage\Http\Controllers'],function(){
    
    Route::get('/bridage','BridageController@index')->name('bridage');
    
    Route::post('/bridage','BridageController@send');
});
