<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
   return view('pages.fashion');
});

Route::get('/bootstrap/{name}/{id}', function ($name,$id) {
    
    return 'Hello :'.$name.'your id is :'.$id;
    // return view('test');
});
Route::get('/bootstrap', function () {
        return view('test'); }); 


  // navbar 
 Route::get('/myinfo','UserController@myinfo'); 
 Route::get('/homee','UserController@home');
 Route::get('/fashion','UserController@fashion');
//  Route::get('/coon','UserController@contact');
 Route::get('/contactus','ContactController@showcontact');
 Route::post('/send','ContactController@send');
 Route::resource('products','ProductController');
 
// User
 Route::get('/showupdateinfo','UserController@showupdateinfo'); 
//  Route::post('/showupdateinfo','UserController@showupdateinfo');
 Route::post('/updateinfo','UserController@updateinfo'); 
 Route::get('/showchangepassword','UserController@showchangepassword'); 
 Route::post('/changepassword','UserController@changepassword'); 
 Route::get('/myproduct', 'HomeController@myproduct'); 


//  Admin
 Route::get('/assignto/{id}' ,'HomeController@assignto');
 Route::post('/assign' ,'HomeController@assign' ); 
 Route::get('/allusers','UserController@allusers');
 Route::get('/deleteuser/{id}','UserController@deleteuser'); 
 Route::get('/upgraduser/{id}','UserController@upgraduser');
 Route::get('/showupdate/{id}','UserController@showupdate'); 
 Route::post('/update','UserController@update');


 


Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
