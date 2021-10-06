<?php
// <<start Manal : 24092021 Creating Controller >>

/* 
command
__________________________
php artisan make:controller <--Name of Controller -->

note:
______
the name of controller must be first letter Capital letter
do not forget edit the namespace if you move the controller to any file
and
add <-- use App\Http\Controllers\Controller; -->
or 
add <-- use Illuminate\Routing\Controller; --> 
*/

namespace App\Http\Controllers\Admin;


// <<end Manal : 24092021 Creating Controller >>

use Illuminate\Http\Request;

// <<start Manal : 25092021 Controller & namespace >>

use Illuminate\Routing\Controller;
//  ↑
// or
//  ↓
//  use App\Http\Controllers\Controller;

// <<end Manal : 25092021 Controller & namespace >>


class FirstController extends Controller
{
    // <<start Manal : 25092021 Controller Middleware >>
    /*
    note:
    ______
    this is example of login page for auth in middleware from controller by __construct 
    all method in this class will auth by middelware except the method in side except function
    */
    public function __construct()
    {
        $this->middleware('auth')->except('show4', 'show');
    }
    /*
    |---------------------------------------------------------------------
    */
    public function show1()
    {
        return "First1";
    }
    public function show2()
    {
        return "First2";
    }
    public function show3()
    {
        return "First3";
    }
    public function show4()
    {
        return "First4";
    }
    /*
    |---------------------------------------------------------------------
    */
    // <<end Manal : 25092021 Controller Middleware >>


    // <<start Manal : 25092021 Controller & namespace >>
    public function show()
    {
        return "First";
    }
    /*
    |---------------------------------------------------------------------
    */
    // <<end Manal : 25092021  Controller & namespace>>
}
