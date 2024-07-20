<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'from_date' => ['nullable', 'string', 'date'],
            'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
            'tag' => ['nullable', 'string', 'max:10'],
        ]);


        $query = Post::query()
            ->where('published', true)
            ->whereNotNull('published_at');

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%$search%");
        }

        if ($fromDate = $validated['from_date'] ?? null) {
            $query->where('published_at', '>=', new Carbon($fromDate));
        }

        if ($toDate = $validated['to_date'] ?? null) {
            $query->where('published_at', '<=', new Carbon($toDate));
        }

        if ($tag = $validated['tag'] ?? null) {
            $query->whereJsonContains('tags', $tag);
        }

        $posts = $query->latest('published_at')->paginate(12);

        return view('blog.index', compact('posts'));


//        // select * from posts
//        $posts = Post::query()->get();
//
//        // select id, title, published_at
//        $posts = Post::query()->get(['id', 'title', 'published_at']);
//
//        // select * from posts limit 12
//        $posts = Post::query()->limit(12)->get();
////        $posts = Post::query()->take(12)->get();
//
//        // select * from posts limit 12 offset 12
//        $posts = Post::query()->limit(12)->offset(12)->get();
////        $posts = Post::query()->take(12)->skip(12)->get();
//
//        $validated = $request->validate([
//            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
//            'page' => ['nullable', 'integer', 'min:1', 'max:100'],
//        ]);
//
//        $page = $validated['page'] ?? 1;
//        $limit = $validated['limit'] ?? 12;
//        $offset = $limit * ($page - 1);
//
//        $posts = Post::query()->limit($limit)->offset($offset)->get();
//
//        $posts = Post::query()->paginate($limit);
//
//        // select * from posts order by published_at desc
//        //        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(12);
//        //        $posts = Post::query()->oldest('published_at')->paginate(12);


//        $posts = Post::query()
//            ->where('id', '=', 5)
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->where('published', true)
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->where('id', '<=', 10)
//            ->paginate(12);
//
//        $search = 'dolor';
//        $posts = Post::query()
//            ->where('title', 'like', '%{$search}%')
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->whereNotNull('published_at')
//            ->paginate(12);
//
////            ->where('published_at', null)
////            ->whereNull('published_at')
////            ->offset(10)
////            ->toSql();
////
////        dd($posts);
//
//        $posts = Post::query()
////            ->whereIn('id', [1, 2, 3])
//            ->whereNotIn('id', [1, 2, 3])
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->whereDate('published_at', new Carbon('2024-05-17'))
////            ->where('published_at', '>', new Carbon('2024-05-17'))
////            ->whereYear('published_at', 2024)
////            ->whereMonth('published_at', 1)
////            ->whereDay('published_at', 12)
//            ->paginate(12);
//
//        $posts = Post::query()
////            ->whereBetween('id', [1, 5])
//            ->whereBetween('published_at', [
//                new Carbon('2024-05-17'),
//                new Carbon('2024-05-30'),
//            ])->paginate(12);
//
//        $posts = Post::query()
//            ->where(function (Builder $query) {
//                $query->where('published', true)
//                    ->whereNotNull('published_at');
//            })
//            ->orWhere('id', 10)
//            ->paginate(12);
//
////        $fromDate = new Carbon('2024-08-01 00:00:00');
//        $fromDate = null;
//        $toDate = new Carbon('2024-08-30 23:59:59');
//
//        $posts = Post::query()
//            ->when($fromDate, function (Builder $query, Carbon $fromDate) {
//                $query->where('published_at', '>=', $fromDate);
//            }, function (Builder $query) {
//                $query->where('published_at', '<=', now()->startOfYear());
//            })->paginate(12);
//
//        $query = Post::query();
//
//        if($fromDate) $query->where('published_at', '>=', $fromDate);
//        else $query->where('published_at', '<=', now()->startOfYear());
//
//        $fromDate
//            ? $query->where('published_at', '>=', $fromDate)
//            : $query->where('published_at', '<=', now()->startOfYear());


    }

    public function show(Request $request, Post $post)
    {
//        $post = cache()->remember(
//            key: "posts.{$post}",
//            ttl: now()->addHour(),
//            callback: function () use ($post) {
//                return Post::query()->findOrFail($post);
//            });


        // select * from posts order by published_at ask limit 1
//       $post = Post::query()->oldest('published_at')->first(['id', 'title']);
//       $post = Post::query()->oldest('published_at')->firstOrFail(['id', 'title']);

        //select id, title, content from posts where id = 123 limit 1
//       $post = Post::query()->find($post, ['id', 'title', 'content']);
//       $post = Post::query()->findOrFail($post, ['id', 'title', 'content']);

        // select id, title, published_at from posts where id in (1,2,3)
//       $posts = Post::query()->find([1,2,3], ['id', 'title', 'published_at']);

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'one like';
    }
}


