<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\departmentcontroller;


// 
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

// Route::get('/user/{name}', function($name) {
// 	return view('users',['name'=>$name]);
// });

  // Route::get('/logi', function ()
  // {

 	// return view ('abc');

  // });



// Route::get('/staffhome', function ()
//  {

//  	return view ('Frontend.staffhome');

//  });

 // Route::get('/list','TemplateController@index');

 Route::get('/home','appointmentcontroller@index','appointmentcontroller@view');
 Route::get('/getdoctor/{id}','appointmentcontroller@getdoctor');
 // Route::get('/home','appointmentcontroller@view');

  Route::get('/staffhome','staffcontroller@index');
 Route::get('/getdoctor/{id}','staffcontroller@getdoctor');


  Route::get('/appointment','testcontroller@index');
 Route::get('/getuser/{id}','testcontroller@getuser');

 Route::get('/use','departmentcontroller@index');
 // Route::get('/users','userviewcontroller@index');

 // Route::get('/new','userviewcontroller@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
