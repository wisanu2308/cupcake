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
//     return view('welcome');
// });

Route::get("/", 'MainController@index');

Route::get("fbapi", 'FBAPIController@index');

Route::get("igapi", 'IGAPIController@index');
Route::get("igapi/hashtag", 'IGAPIController@hashtag');

Route::get("twapi", 'TWAPIController@index');

Route::get("baccarat", 'BaccaratController@index');





## EXAMPLE
## Route::get("menu_privileges/view", 'Privileges\MenuPrivilegesController@index');