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

Route::get('/', function () {
    return view('welcome');
});
*/

// <<start Manal : 22092021 Routes >>

/* kinds of request in route
______________________
get --------->with view 
post--------->with database instead of put , delete route 
put --------->update
delete------->delete
option------->
 */

Route::get('/test1/', function () {
    return "welcome Test 1";
});

/*
|--------------------------------------------------------------------------
*/

/* route with parameter
__________________________
optional-->{id?}
must ----->{id}
*/

Route::get('/test2/{id}', function ($id) {
    return $id;
});
Route::get('/test3/{id?}', function ($id = 3) {
    return "Welcome test3 {$id}";
});

/*
|--------------------------------------------------------------------------
*/

/* route with name
__________________________
*/

Route::get('/test4/', function () {
    return "Welcome test4";
})->name('name1');

Route::get('/test5/{id}', function ($id) {
    return "Welcome test5";
})->name('name2');

Route::get('/test6/{id?}', function () {
    return "Welcome test6";
})->name('name3');

/*
|--------------------------------------------------------------------------
*/

// <<end Manal : 22092021 Routes >>


// <<start Manal : 23092021 Routes >>


/* all routes in this will access the methods or controllers that found in the specific folder 
ex:
"Front" folder
Route::namespace('folder name')->group(function () {
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    Route::get('any name', 'page name@function name');
    ......
});
__________________________

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
|---------------------------------------------------------------------
*/
// <<end Manal 23092021 Routes dep. >>


// <<start Manal : 25092021  Controller & namespace>>
Route::group(['namespace' => 'Admin'], function () {
    Route::get('first', 'FirstController@show');
});
/*
|---------------------------------------------------------------------
*/
// <<end Manal : 25092021  Controller & namespace>>


// <<start Manal : 25092021 Controller Middleware >>

/*
note:
______
this is example of login page for auth in middleware from route
*/
Route::group(['namespace' => 'Admin'], function () {
    Route::get('firsts', 'FirstController@show')->middleware('auth');
});
/*
|---------------------------------------------------------------------
*/

/*
note:
______
this is example of login page for auth in middleware from controller by __construct
*/

Route::group(['namespace' => 'Admin'], function () {
    Route::get('first1', 'FirstController@show1');
    Route::get('first2', 'FirstController@show2');
    Route::get('first3', 'FirstController@show3');
    Route::get('first4', 'FirstController@show4');
});

/*
|--------------------------------------------------------------------------


note:
______
this is example of login page for auth in middleware mean
you can not enter the page you request until login 
*/

Route::get('login', function () {
    return "Login pages";
})->name('login');

/*
|--------------------------------------------------------------------------
*/
// <<end Manal : 25092021 Controller Middleware >>


// <<start Manal : 26092021 Controller and route resource >>

/*
note:
______
to display all route <-- php artisan route:list-->
to make route resource <-- php artisan make:controller ControllerName --resouce -->
you make route resource when you want to use all these routes:
route::post('news','NewsController@store');
route::get('news','NewsController@index');
route::get('news/create','NewsController@create');
route::get('news/{news}','NewsController@show');
route::get('news/{news}/edit','NewsController@edit');
route::delete('news/{news}','NewsController@destroy');
route::put('news/{news}','NewsController@update');

but if you want use just one of these routes do not us route resource
    Route::get('any name', 'page name@function name');
ex:
you want just create method
route::get('news/create','NewsController@create');
*/

Route::resource('news', 'NewsController');

/*
|--------------------------------------------------------------------------
*/

// <<end Manal : 26092021 Controller and route resource >>


// <<start Manal : 27092021 View >>

/*
note:
______
to disconnection of the port press Ctrl+C.
to change the port of website <-- php artisan serve  --port=any port -->
ex:
<-- php artisan serve  --port=8001 -->

to view the view you can by 2 way:
1- direct from route
ex:
Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
*/

/*
2- indirect from route by controller
ex:↓
*/

Route::get('index', 'Front\UserController@getIndex');

/*
|--------------------------------------------------------------------------
*/
// <<end Manal : 27092021 View >>
// <<start Manal : 27092021 passing data to views >>
// <<start Manal : 28092021 passing data to views >>
/*
note:
______
to pass data to the view you can by 2 way:
1-from route 
use this way when defined constant. 
    a) with with function
        i) integer value
        ex:↓
            Route::get('/', function () {
                return view('welcome')->with('data', 22);
            });
        in view:
        {{ $data }}
        ii) string value
        ex:↓
            Route::get('/', function () {
                return view('welcome')->with('data', 'Manal alsubaei');
            });
        in view:
        {{ $data }}
        iii) array
        ex:↓
            
                return view('welcome')->with(['name' => 'Manal Alsubaei', 'age'=> 22]);
            });
        in view:
        {{ $name }}
        {{ $age }}
    b) with array
    ex:↓
    Route::get('/', function () {
        $data = [];
        $data['id'] = 100;
        $data['name'] = 'Manal';
        return view('welcome', $data);
    });
    in view:
    {{ $id }}
    {{ $name }}

/*
|--------------------------------------------------------------------------
*/

/*
2- from controller
ex:↓
*/

Route::get('/', 'Front\UserController@getIndex');

/*
|--------------------------------------------------------------------------
*/

// <<end Manal : 27092021 passing data to views >>
// <<end Manal : 28092021 passing data to views >>

// <<start Manal : 28092021 create Landing Page with laravel blade and bootstrap >>

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});

/*
|--------------------------------------------------------------------------
*/

// <<end Manal : 28092021 create Landing Page with laravel blade and bootstrap >>

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
