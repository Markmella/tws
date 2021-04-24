@extends('layout.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard-container">
    {{-- <h2> Dashboard Content Here </h2> --}}
    <h2> Welcome to TWS {{ auth()->user()->name }} </h2>
    <p class="dashboard-text">    
        Write your article below then it will be review by the admin
        if we're going to publish it. Thank you. Have a nice Day. 
    </p>
    <div class="dashboard-body">
        <form action="">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="author" placeholder="Author">
            <input type="text" name="source" placeholder="Source">
            <textarea name="message-box" id="" cols="30" rows="20" placeholder="Type your article here..."></textarea>
            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

@endsection