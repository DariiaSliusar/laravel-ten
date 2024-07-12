@extends('layouts.main')

@section('page.title', 'Edit post')

@section('main.content')

    <x-title>
        {{ __('Edit post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>


    <x-form action="{{ route('user.posts.update', $post->id) }}" method="put">
        <x-form-item>
            <x-label required>{{ __('Title post') }}</x-label>
            <x-input name="title" value="{{ $post->title }}" autofocus/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{ __('Content post') }}</x-label>
            <x-textarea name="content" value="{{ $post->content }}" rows="10" />
        </x-form-item>

        <x-button type="submit">
            {{ __('Save') }}
        </x-button>
    </x-form>

@endsection



