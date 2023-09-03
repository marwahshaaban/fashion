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



//  Admin
 Route::get('/assignto/{id}' ,'HomeController@assignto');
 Route::post('/assign' ,'HomeController@assign' );
 Route::get('/allusers','UserController@allusers');
 Route::get('/deleteuser/{id}','UserController@deleteuser');
 Route::get('/upgraduser/{id}','UserController@upgraduser');
 Route::get('/showupdate/{id}','UserController@showupdate');
 Route::post('/update','UserController@update');

//catagory
Route::get('/shirts' ,'ClothesController@shirts');
Route::get('/jeans' ,'ClothesController@jeans');
Route::get('/swimwear' ,'ClothesController@swimwear');
Route::get('/sleepwear' ,'ClothesController@sleepwear');
Route::get('/sportswear' ,'ClothesController@sportswear');
Route::get('/jumpsuites' ,'ClothesController@jumpsuites');
Route::get('/blazers' ,'ClothesController@blazers');
Route::get('/jackets' ,'ClothesController@jackets');
Route::get('/shoes' ,'ClothesController@shoes');

//rating
Route::post('/rating', 'ClothesController@addrating');
Route::get('/recom/{id}', 'ClothesController@recomendation');

// //Search
// Route::post('/search', 'ClothesController@search');
// Route::get('/showsearch', 'ClothesController@showsearch');

Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//resservation
Route::get('/addreservation/{id}', 'reservationController@addreservation');
Route::post('/reser', 'reservationController@reser');
Route::get('/allreservation', 'reservationController@allreservation');
Route::get('/delete/{id}', 'reservationController@delete');
Route::get('/deletereservation/{id}', 'reservationController@deletereservation');

 
 Route::get('/bagto/{id}' ,'HomeController@bagto');
 Route::post('/bag' ,'HomeController@bag' );
 Route::get('/myproduct', 'HomeController@myproduct');
 Route::post('/updateorder', 'ProductController@updateorder');
 Route::get('/delete/{id}', 'ProductController@delete');
 Route::get('/buy', 'HomeController@buy');
 Route::post('/ship', 'HomeController@ship');
 Route::get('/pdf', 'HomeController@pdf');
 Route::get('/adminproduct', 'HomeController@adminproduct');
 Route::get('/editproduct/{id}', 'HomeController@editproduct');
 Route::post('/updatproduct', 'HomeController@updatproduct');
 Route::get('/deleteproduct/{id}', 'HomeController@deleteproduct');
 //search
 Route::get('/search', 'SearchController@search')->name('web.search');
Route::get('/find', 'SearchController@find')->name('web.find');
//discount
Route::get('/adddiscount', 'discountController@adddiscount'); 
 Route::post('/discount', 'discountController@discount'); 
 Route::get('/alldiscount', 'discountController@alldiscount'); 
 Route::get('/deletediscount/{id}', 'discountController@deletediscount'); 
 //
 Route::get('/dresses' ,'ClothesController@dresses');
Route::get('/man' ,'ClothesController@man');
Route::get('/woman' ,'ClothesController@woman');
