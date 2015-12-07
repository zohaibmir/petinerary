@extends('layouts.simple')

@section('title', 'Add Users')

@section('sidebar')

@endsection

@section('content')

<form role="form" action="" method="post" class="form-layout">
    {!! csrf_field() !!}
    @include('admin.user._registerForm')
</form>

@endsection







