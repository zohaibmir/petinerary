@extends('layouts.simple')

@section('title', 'Ambassador Login')

@section('sidebar')

@endsection

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">+ss
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form role="form" action="/" class="form-layout">
    <div class="text-center mb15">
        <img src="{{asset('images/logo-dark.png')}}" />
    </div>
    <p class="text-center mb30">Welcome to Ambassador. Please sign in to your account</p>

    @include('ambassdor.auth._loginForm')
</form>

@endsection







