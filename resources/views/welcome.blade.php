@extends('layouts.master')

@section('title', 'Dashboard')

@section('sidebar')
@parent
@include('admin._sidebar')
@endsection

@section('content')
@include('admin._dashboard')
@endsection
