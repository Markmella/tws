@extends('admin.adminMaster')

@section('title') TWS | Admin @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/adminHome.css') }}">

<div class="home-container">
    <img src="{{ asset('images/logo.JPG') }}">
    <div class="center-text">
        T W S - Database
    </div>
</div>

@endsection