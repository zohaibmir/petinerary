@extends('layouts.simple')

@section('title', 'My Profile')

@section('sidebar')

@endsection

@section('content')

<form role="form" action="" method="post" class="form-layout">
    {!! csrf_field() !!}

</form>

@endsection







