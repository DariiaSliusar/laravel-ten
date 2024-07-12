<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'store';
    }

    public function create()
    {

    }

    public function store(Request $request){}

    public function show($post){
        return "post {$post}";
    }

    public function edit(){
        return 'post';
    }

    public function update(Request $request, $id){}

    public function delete($id){}

    public function like(){}


}
