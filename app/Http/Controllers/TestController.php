<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:10');
    }
    public function __invoke(Request $request)
    {
//        return 'Test';

//       return response('test', 200, []);

//        return['foo' => 'bar'];
        return response()->json(['foo' => 'bar']);

    }
}
