@extends('layouts.simple')

@section('title', 'Admin Login')

@section('sidebar')

@endsection

@section('content')

<form role="form" action="" method="post" class="form-layout">
    {!! csrf_field() !!}
    @include('admin.login._loginForm')
</form>

@endsection







