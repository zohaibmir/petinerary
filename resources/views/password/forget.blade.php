@extends('layouts.simple')

@section('title', 'Ambassador Login')

@section('sidebar')

@endsection

@section('content')
<form role="form" action="extras-signin.html" class="form-layout">
    <div class="text-center mb15">
        <img src="{{asset('images/logo-dark.png')}}" />
    </div>
    <p class="text-center mb25">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
    <div class="form-inputs">
        <input type="email" class="form-control input-lg" placeholder="Email address" autofocus>
    </div>

    <button class="btn btn-success btn-lg btn-block" type="submit">Send Password Reset</button>
</form>

@endsection









