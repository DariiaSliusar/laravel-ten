<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(UserStoreRequest $request)
    {
//      dd($request['name']);
//        $user = User::create([
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'password' => bcrypt($request['password']),
//        ]);

        $user = User::create(['name' => 'jibdvdsf', 'email' => 'kli@hmnjk.com', 'password' => bcrypt('password')]);

        dd($user);

        return redirect()->route('user');
    }
}
