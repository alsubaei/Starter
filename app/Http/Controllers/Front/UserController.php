<?php
// <<start Manal : 23092021 Routes >>



namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use stdClass;

class UserController extends Controller
{
    public function showUser()
    {
        return "This is user display from request with controller from namespace ";
    }
    public function showUserName()
    {
        return "This is user name Manal";
    }
    public function showUserId()
    {
        return "This is user id 100";
    }


    /*
    |--------------------------------------------------------------------------
    */
    // <<Start Manal : 27092021 View >>
    // <<Start Manal : 28092021 passing data to view >>
    /* 
    note:
    ______

    a)array
        ex:↓
        public function getIndex()
        {
            $data = [];
            $data['id'] = 100;
            $data['name'] = 'Manal in Controller';
            return view('welcome', $data);
        }
        in view:
        {{ $id }}
        {{ $name }}
    b)object
    ex:↓
        public function getIndex()
        {
            $obj = new \stdClass();
            $obj->name = 'Manal object';
            $obj->age = 22;
            $obj->gender = 'Female';
            return view('welcome', compact('obj'));
        }
        in view:
        {{ $obj->name }}
        {{ $obj->age }}
        {{ $obj->gender }}
 */

    public function getIndex()
    {
        // $obj = new \stdClass();
        // $obj->name = 'Manal object';
        // $obj->age = 22;
        // $obj->gender = 'Female';
        // return view('welcome', compact('obj'));


        // <<start Manal : 29092021 view directives >> 

        // $data = ['Manal', 22, 'Female'];
        // return view('welcome')->with('data', $data);

        // $data = [];
        // return view('welcome')->with('data', $data);

        $obj = new \stdClass();
        $obj->name = 'object';
        $obj->age = 22;
        $obj->gender = 'Female';
        return view('welcome', compact('obj'));
        // <<end Manal : 29092021 view directives >> 

    }

    /*
    |--------------------------------------------------------------------------
    */
    // <<end Manal : 27092021 View >>
    // <<end Manal : 28092021 passing data to view >>

}

// <<end Manal : 23092021 Routes >>
