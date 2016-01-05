@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('sidebar')
@parent
@include('admin._sidebar')
@endsection

@section('content')
@include('admin._dashboard')
@endsection
