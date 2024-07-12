@extends('layouts.main')

@section('page.title', 'Create post')

@section('main.content')

    <x-title>
        {{ __('Create post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.index') }}">
                {{ __('site.Back') }}
            </a>
        </x-slot>
    </x-title>

    <x-form action="{{ route('user.posts.store') }}" method="POST">
        <x-form-item>
            <x-label required>{{ __('Title post') }}</x-label>
            <x-input name="title" autofocus/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{ __('Content post') }}</x-label>
            <x-textarea name="content" rows="10" />
        </x-form-item>

        <x-button type="submit">
            {{ __('Create post') }}
        </x-button>
    </x-form>


@endsection


