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

Route::get('/', function(){
    return view('welcome'); //esta ruta es la raiz del proyecto
});

Route::get('prueba/{param}', 'PruebaController@prueba');

Route::resource('trainers','TrainerController');

Route::get('/name/{name}/lastname/{lastname}', function($name,$lastname){
    return 'Hola soy '.$name.'mi apellido es  '.$lastname;  //en este se resive un parametro
});


// Route::get('/name/{name}', function($name){
//     return 'Hola soy'.$name;  //en este se resive un parametro
// });

// Route::get('/name/{name}/lastname/{lastname}', function($name,$lastname){
//     return 'Hola soy '.$name.'mi apellido es  '.$lastname;  //en este se resive un parametro
// });

// Route::get('/ruta1', function(){
//     return ''; 
// });