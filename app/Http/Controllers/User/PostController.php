<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(12);
        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        for ($i = 0; $i < 99; $i++) {
            Post::query()->create([
                'user_id' => User::query()->value('id'),
                'title' => fake()->sentence(),
                'content' => fake()->paragraph(),
                'published' => true,
                'published_at' => fake()->dateTimeBetween(now()->subYear(), now()),
            ]);
        }


        return view('user.posts.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $validated = validate($request->all(), [
           'title' => ['required', 'string', 'max:100'],
           'content' => ['required', 'string', 'max:10000'],
           'published_at' => ['nullable', 'string', 'date'],
           'published' => ['nullable', 'boolean'],
       ]);

        $post = Post::query()->firstOrCreate([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
        ],[
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at']  ?? null),
            'published' => $validated['published'] ?? false,
        ]);

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









