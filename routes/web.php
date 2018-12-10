<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UsuarioController');

Auth::routes();

Route::get('/datos', function ( ){
    return view('freelance/datos');
});

Route::get('/front', function ( ){
    return view('front');
});

Route::get('/crear', function ( ){
    return view('/freelance/crearcuenta');
});

Route::get('/completarPF', function ( ){
    return view('freelance/completarPF');
});


//Proyecto
Route::get('/datos', function ( ){
    return view('proyecto/datos');
});

Route::get('/cuentaP', function ( ){
    return view('proyecto/crearcuentaP');
});

Route::get('/freedatos', function ( ){
    return view('proyecto/freelancerDatos');
});

Route::get('/estadoP', function ( ){
    return view('proyecto/estado_proyecto');
});
