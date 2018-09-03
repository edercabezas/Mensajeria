<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/conversacion','ConversacionController@index');
Route::get('/api/mensajes','MensajesController@index');
Route::post('/api/mensajes','MensajesController@store');
