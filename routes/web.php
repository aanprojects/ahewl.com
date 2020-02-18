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
Route::get('/assets','HomePage@assetPage');
Route::get('/messages','HomePage@messagesPage');
Route::get('/login','HomePage@login')->name('login');;
Route::get('/logout','HomePage@logout');

Route::post('/loginsuccess','authenticate@loginpage');



//

Route::get('/adminHome','adminPage@adminArea');
Route::get('/adminAbout','adminAbout@adminAbout');
Route::get('/adminWorks','adminPage@adminWorks');

Route::post('/addOwnerInfo','adminPage@addOwnerInfo');
Route::post('/editOwersInfo/{id}','adminPage@editOwersInfo');
Route::get('/deleteOwnerInfo/{id}','adminPage@deleteOwnerInfo');
Route::post('/updateStatus_owner/{id}','adminPage@updateStatus_owner');

Route::post('/addImageInfo','adminPage@addImageInfo');
Route::post('/editImageInfo/{id}','adminPage@editImageInfo');
Route::get('/deleteImagesInfo/{id}','adminPage@deleteImagesInfo');
Route::post('/updateStatus_Images/{id}','adminPage@updateStatusImages');



Route::post('/addCompanyInfo','adminPage@addCompanyProfile');
Route::post('/editCompanyInfo/{id}','adminPage@editCompanyProfile');
Route::get('/deleteCompanyInfo/{id}','adminPage@deleteCompanyInfo');

Route::post('/addProjectInfo','adminPage@addProjectInfo');
Route::get('/deleteProjectInfo/{id}','adminPage@deleteProjectInfo');
Route::post('/editProjectInfo/{id}','adminPage@editProjectInfo');

Route::post('/addProjectDetailsInfo','adminPage@addProjectDetailsInfo');
Route::post('/updateStatus_PDetails/{id}','adminPage@updateStatus_PDetails');
Route::get('/deleteProjectDetailsInfo/{id}','adminPage@deleteProjectDetailsInfo');
Route::post('/editProjectDetailsInfo/{id}','adminPage@editProjectDetailsInfo');

Route::post('/addTeamInfo','adminAbout@addTeamInfo');
Route::post('/updateStatus_team/{id}','adminAbout@updateStatusTeam');
Route::post('/editTeamInfo/{id}','adminAbout@editTeamInfo');
Route::get('/deleteTeamInfo/{id}','adminAbout@deleteTeamInfo');

Route::post('/addNewsInfo','adminPage@addNewsInfo');
Route::post('/updateNews/{id}','adminPage@updateStatusNews');
Route::post('/editNewsInfo/{id}','adminPage@editNewsInfo');
Route::get('/deleteNewsInfo/{id}','adminPage@deleteNewsInfo');

Route::post('/addManpowerInfo','adminAbout@addManpowerInfo');
Route::post('/editManpowerInfo/{id}','adminAbout@editManpowerInfo');
Route::get('/deleteManpowerInfo/{id}','adminAbout@deleteManpowerInfo');

Route::post('/addEquipmentInfo','adminAbout@addEquipmentInfo');
Route::post('/editEquipmentInfo/{id}','adminAbout@editEquipmentInfo');
Route::get('/deleteEquipmentInfo/{id}','adminAbout@deleteEquipmentInfo');

Route::post('/sendMailNow','send@sendMe');


