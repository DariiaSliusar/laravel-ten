@extends('layouts.main')

@section('page.title', 'Our blog')

@section('main.content')

    <x-title>
        {{ __(' List posts') }}
    </x-title>

   @include('blog.filter')

    @if($posts->isEmpty())
        {{ __('No posts') }}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div>

        {{ $posts->links() }}
    @endif

@endsection

