@extends('asimshazad::layouts.app')

@section('body-class', 'bg-light')
@section('parent-content')
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <h2 class="text-center mb-3">
                    <a href="{{ route('admin') }}" class="text-dark text-decoration-none">
                        <img src="{{ asset('asimshazad/logo_login.png') }}">
                    </a>
                </h2>
                <div class="card mb-5 shadow">
                    <div class="card-body">
                        @yield('child-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
