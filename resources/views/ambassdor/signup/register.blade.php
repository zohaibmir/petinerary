@extends('layouts.simple')

@section('title', 'Admin Login')

@section('sidebar')

@endsection

@section('content')

<form role="form" action="" method="post" class="form-layout">
    {!! csrf_field() !!}
    @include('ambassdor.signup._registerForm')
</form>

@endsection







