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
    if(Auth::user()!=null){
        return redirect('home');
    }
    return view('dashboard/index');
});

Route::auth();

Route::get('/home','HomeController@index')->name('home');

Route::group(['middleware'=>'verificar_sesion'],function(){

    //Aca van todas las rutas relacionadas a los controladores 
    
    Route::get('/alumno', 'AlumnoController@index')->name('alumno_home');
    Route::get('/profesor', 'ProfesorController@index')->name('profesor_home');


    
});


