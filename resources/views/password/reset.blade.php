@extends('layouts.simple')

@section('title', 'Ambassador Login')

@section('sidebar')

@endsection

@section('content')
<form role="form" action="extras-signin.html" class="form-layout">
    <div class="text-center mb15">
        <img src="{{asset('images/logo-dark.png')}}" />
    </div>
    @if (Session::has('alert'))
    <div data-alert="" class="alert-box radius  alert-message">
        {{ trans(Session::get('alert')) }}
    </div>
    @endif

    <p class="text-center mb25">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
    <div class="form-inputs">
        <input type="hidden" name="token" value="">
        <input type="email" class="form-control input-lg" placeholder="Email address" autofocus>
        <input type="password" class="form-control input-lg"  required name="password" placeholder="New password">
        <input id="password_confirmation" class="form-control input-lg"  type="password" name="password_confirmation" placeholder="Repeat New Password">  
    </div>

    <button class="btn btn-success btn-lg btn-block" type="submit">Reset Password</button>
</form>

@endsection