<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    //        if($test = session('test')) {
    //            action($test);
    //        }
    //
    //        dd(session()->has('foo'));

//        dd(session()->all());
//        $foo = session('foo');
//
//        dd($foo);

        return view('login.index');
    }

    public function store(Request $request)
    {
      alert(__('Welcome'));

//        session()->put('foo', 'bar');

//        session([
//            'foo' => 'Bar',
//            'name' => 'Dasha',
//        ]);

//        session()->forget('foo');
//        session()->flush();

//        if (true) {
//            return redirect()->back()->withInput();
//        }

        return redirect()->route('user');

    }
}


