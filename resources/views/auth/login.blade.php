@extends('layout.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/login-register.css') }}">

<div class="login-register-form">
    <form class="forms" action="{{ route('login') }}" method="POST">
        <h2> Login to The World Scoop </h2>
        @csrf
        @if (session('status'))
            <div id="error-login">
                {{ session('status') }}
            </div>
        @endif
        <input id="email" type="text" name="email" placeholder="Email"
            @error('email') style="border: 1px solid red" onkeyup="emailInput()" @enderror
            value="{{ old('email') }}">
        @error('email')
            <div id="error1" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <input id="password" type="password" name="password" placeholder="Password"
            @error('password') style="border: 1px solid red" onkeyup="passwordInput()" @enderror>
        @error('password')
            <div id="error2" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <div class="remember">
            <input class="checkbox" type="checkbox" name="remember">
            <label for="remember"> Remember me </label>
        </div>

        <input type="submit" value="Login">
    </form>
</div>

    <script>
        let emailField = document.getElementById('email');
        let passwordField = document.getElementById('password');

        let error1 = document.getElementById('error1');
        let error2 = document.getElementById('error2');

        function emailInput(){
            let input = document.getElementById('email').value;

            if(input.length !== 0){
                error1.style.display = "none";
                emailField.style.border = "1px solid #444";
            }else {
                error1.style.display = "block";
                emailField.style.border = "1px solid red";
            }
        }

        function passwordInput(){
            let input = document.getElementById('password').value;

            if(input.length !== 0){
                error2.style.display = "none";
                passwordField.style.border = "1px solid #444";
            }else {
                error2.style.display = "block";
                passwordField.style.border = "1px solid red";
            }
        }
    </script>
    
@endsection