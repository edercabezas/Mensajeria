<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/chat/{conversacionId}', 'ChatController@index');


Route::get('/perfil','PerfilController@edit');
Route::post('/perfil','PerfilController@update');

Route::get('/usuario','UsuariosController@edit');
Route::post('/usuario','UsuariosController@update');

Route::get('/api/conversacion','ConversacionController@index');
Route::get('/api/mensajes','MensajesController@index');
Route::post('/api/mensajes','MensajesController@store');
