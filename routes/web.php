<?php

Route::get('/','HomeController@index');
Route::group(['middleware' => 'cors'], function(){
    Route::get('/contacts','ContactController@index');
});

