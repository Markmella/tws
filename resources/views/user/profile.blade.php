@extends('layout.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="profile-container">
    <div class="profile-content">
        <img src="/images/profile.png">
        
        <p> <span> Name: </span> {{ auth()->user()->name }} </p>
        <p> <span> Username: </span> {{ auth()->user()->username }} </p>
        <p> <span> Email: </span> {{ auth()->user()->email }} </p>
        <button id="change-password-button" type="submit"> Change Password </button>
        <div class="password-container">
            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
            <input type="password" placeholder="Current Password">
            <input type="password" placeholder="New Password">
            <input type="password" placeholder="Repeat Password">
            <button id="save-password-button" type="submit"> Save </button>
        </div>
    </div>
</div>

    <script>
        let changePasswordBtn = document.getElementById("change-password-button");
        let savehangePasswordBtn = document.getElementById("save-password-button");
        let changePasswordCon = document.querySelector(".password-container");

        changePasswordBtn.addEventListener('click', function(){
            changePasswordBtn.style.display = "none";
            changePasswordCon.style.display = "flex";
        });

        savehangePasswordBtn.addEventListener('click', function(){
            changePasswordCon.style.display = "none";
            changePasswordBtn.style.display = "flex";
        });
    </script>

@endsection