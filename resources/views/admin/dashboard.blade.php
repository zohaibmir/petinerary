@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('sidebar')
@parent
@include('ambassdor._sidebar')
@endsection

@section('content')
@include('ambassdor._dashboard')
@endsection
