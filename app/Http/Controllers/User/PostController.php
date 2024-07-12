<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem jcdsjkbck;dsb sjacksjbc',
            'content' => 'Lorem jcdsjkbck;dsb <strong>dolar</strong> sjacksjbc vlhv jbkbb hvfktyykt hjhf jdbjk d;qwhd;',
        ];
        $posts = array_fill(0, 10, $post);
        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $validated = validate($request->all(), [
           'title' => ['required', 'string', 'max:100'],
           'content' => ['required', 'string', 'max:10000'],
       ]);

//        if(true) {
//            throw ValidationException::withMessages([
//                'account' => __('Insufficient funds')
//            ]);
//        }

       dd($validated);

        alert(__('Saved'));

        return redirect()->route('user.posts.show', 123);
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem jcdsjkbck;dsb sjacksjbc',
            'content' => 'Lorem jcdsjkbck;dsb <strong>dolar</strong> sjacksjbc vlhv jbkbb hvfktyykt hjhf jdbjk d;qwhd;',
        ];
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem jcdsjkbck;dsb sjacksjbc',
            'content' => 'Lorem jcdsjkbck;dsb <strong>dolar</strong> sjacksjbc vlhv jbkbb hvfktyykt hjhf jdbjk d;qwhd;',
        ];
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        dd($validated);

        alert(__('Saved'));

        return redirect()->route('user.posts.index');
    }

    public function delete($post)
    {
        return redirect()->route('user.posts.index');
    }

    public function like()
    {
    }


}
