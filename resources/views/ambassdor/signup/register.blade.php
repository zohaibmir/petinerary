@extends('layouts.simple')

@section('title', 'Ambassdor SignUp')

@section('sidebar')

@endsection

@section('content')

<form role="form" action="" method="post" class="form-layout">
    {!! csrf_field() !!}
    @include('ambassdor.signup._registerForm')
</form>

@endsection







