<?php



Route::get('/','coinsController@index');

Auth::routes();

Route::group(['middleware'=>['auth']] , function(){

    Route::get('/home', 'coinsController@home')->name('home');
    Route::get('/coins/add' , 'coinsController@add');
    Route::post('/coins/create' , 'coinsController@create');
    Route::get('/coins/{coin}/edit' , 'coinsController@edit');
    Route::patch('/edit/{coin}' , 'coinsController@update');
    Route::delete('/coins/{coin}/delete' , 'coinsController@delete');

}) ;
