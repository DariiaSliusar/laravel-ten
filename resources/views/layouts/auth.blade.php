@extends('layouts.base')

@section('content')
    <section xmlns="http://www.w3.org/1999/html">
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    @yield('auth.content')
                </div>
            </div>
        </x-container>
    </section>
@endsection
