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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','HomePage@indexPage');
Route::get('/about','HomePage@aboutPage');
Route::get('/works','HomePage@worksPage');

//

Route::get('/adminHome','adminPage@adminArea');
Route::get('/adminWorks','adminPage@adminWorks');

Route::post('/addOwnerInfo','adminPage@addOwnerInfo');
Route::get('/deleteOwnerInfo/{id}','adminPage@deleteOwnerInfo');

Route::post('/addCompanyInfo','adminPage@addCompanyProfile');
Route::get('/deleteCompanyInfo/{id}','adminPage@deleteCompanyInfo');


