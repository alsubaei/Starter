<?php
// <<start Manal : 22092021 Routes  >>

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider. Now create something great!
| User routes  
*/

use PhpParser\Node\Expr\FuncCall;

Route::get('/user', function () {
    return 'welcome User';
});

/*  
|--------------------------------------------------------------------------
*/

// <<end Manal : 22092021 Routes   >>



// <<start Manal : 23092021 Routes >>


/* 
namespace
__________________________

all routes in this will access the methods or controllers that found in the specific folder 
ex:
"Front" folder
Route::namespace('folder name')->group(function () {
    Route::get('any name', 'page name@function name');//     folder name.page name@function name
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});

note:
______
can write this code in web , user ,adim in routes folder
*/


Route::namespace('Front')->group(function () {

    Route::get('users', 'UserController@showUser');
    Route::get('username', 'UserController@showUserName');
    Route::get('userid', 'UserController@showUserId');
});
/*
|--------------------------------------------------------------------------
*/



/* 
prefix
__________________________

all routes in this will write specific Url before it 
ex:
"prefix" url
Route::prefix('url')->group(function () {
    Route::get('any name', 'page name@function name');//     /url/any name
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});
or
Route::group(['prefix'=>'url'],function()
{
Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});

*/


Route::namespace('Front')->prefix('url')->group(function () {

    Route::get('users', 'UserController@showUser');
    Route::get('username', 'UserController@showUserName');
    Route::get('userid', 'UserController@showUserId');
});
/*
|--------------------------------------------------------------------------
*/



/* 
group
__________________________

ex:
Route::group(['namespace'=>'folder name','prefix'=>'url'],function()
{
Route::get('any name', 'page name@function name');//   /url/any name , folder name.page name@function name
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});

*/


Route::group(['prefix' => 'url', 'namespace' => 'Front'], function () {

    Route::get('users', 'UserController@showUser');
    Route::get('username', 'UserController@showUserName');
    Route::get('userid', 'UserController@showUserId');
});
/*
|--------------------------------------------------------------------------
*/



/* 
middleware
__________________________

ex:
Route::group(['namespace'=>'folder name','middleware'=>'auth'],function()
{
    Route::get('any name', 'page name@function name');//   /url/any name , folder name.page name@function name
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});

or 

Route::get('any name',function()
{
    return "...";
})->middleware('auth');

*/

Route::get('check', function () {
    return "middleware";
})->middleware('auth');

Route::group(['prefix' => 'url', 'namespace' => 'Front', 'middleware' => 'auth'], function () {

    Route::get('users', 'UserController@showUser');
    Route::get('username', 'UserController@showUserName');
    Route::get('userid', 'UserController@showUserId');
});
/*
|--------------------------------------------------------------------------
*/


// <<end Manal 23092021 Routes   >>
