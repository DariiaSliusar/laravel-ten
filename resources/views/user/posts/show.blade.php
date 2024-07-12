@extends('layouts.main')

@section('page.title', 'View posts')

@section('main.content')

    <x-title>
        {{ __(' View posts') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.index') }}">
                {{ __('site.Black') }}
            </a>
        </x-slot>

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.edit', $post->id) }}">
                {{ __('Edit') }}
            </x-button-link>
        </x-slot>
    </x-title>

    <h2 class="h4">
        {{ $post->title }}
    </h2>

    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
    </div>

    <div class="pt-3">
        {!! $post->content !!}
    </div>

@endsection
