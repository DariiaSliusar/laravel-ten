<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BlogController extends Controller
{
    public function index(Request $request)
    {
//        $data = $request->all();
        $search = $request->input('search');
        $category_id = $request->input('category_id');
//        dd($search, $category_id);

        $post = (object)[
            'id' => 123,
            'title' => 'Lorem dolor dsb sjacksjbc',
            'content' => 'Lorem jcdsjkbck;dsb <strong>dolar</strong> sjacksjbc vlhv jbkbb hvfktyykt hjhf jdbjk d;qwhd;',
            'category_id' => 1,
        ];
        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if($category_id && $post->category_id != $category_id) {
                return false;
            }
            return true;
        });
$categories = [
    null => __('All categories'),
    1 => __('First category'),
    2 => __('Second category'),
    ];

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem jcdsjkbck;dsb sjacksjbc',
            'content' => 'Lorem jcdsjkbck;dsb <strong>dolar</strong> sjacksjbc vlhv jbkbb hvfktyykt hjhf jdbjk d;qwhd;',
        ];
        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'one like';
    }
}


