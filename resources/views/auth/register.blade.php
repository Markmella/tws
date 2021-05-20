@extends('layout.master')

@section('title') TWS | Register @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Account Successfully Created'
        })
    </script>
@endif

<div class="login-register-form">
    <form class="forms" action="{{ route('register') }}" method="POST">
        <h2> Register </h2>
        @csrf
        <input id="name" type="text" name="name" placeholder="Name" autofocus
            @error('name') style="border: 1px solid red" onkeyup="nameInput()" @enderror
            value="{{ old('name') }}">
        @error('name')
            <div id="error1" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <input id="username" type="text" name="username" placeholder="Username" autofocus
            @error('username') style="border: 1px solid red" onkeyup="usernameInput()" @enderror
            value="{{ old('username') }}">
        @error('username')
            <div id="error2" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <input id="email" type="text" name="email" placeholder="Email" autofocus
            @error('email') style="border: 1px solid red" onkeyup="emailInput()" @enderror
            value="{{ old('email') }}">
        @error('email')
            <div id="error3" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <input id="password1" type="password" name="password" placeholder="Password" autofocus
            @error('password') style="border: 1px solid red" onkeyup="password1Input()" @enderror
            value="{{ old('password') }}">

        <input id="password2" type="password" name="password_confirmation" placeholder="Repeat Password" autofocus
            @error('password') style="border: 1px solid red" onkeyup="password2Input()" @enderror>
        @error('password')
            <div id="error4" class="error-message">
                {{ $message }}
            </div>
        @enderror

        <input type="submit" value="Sign Up">
    </form>
</div>

    <script>
        let nameField = document.getElementById('name');
        let usernameField = document.getElementById('username');
        let emailField = document.getElementById('email');
        let password1Field = document.getElementById('password1');
        let password2Field = document.getElementById('password2');

        let error1 = document.getElementById('error1');
        let error2 = document.getElementById('error2');
        let error3 = document.getElementById('error3');
        let error4 = document.getElementById('error4');

        function nameInput(){
            let input = document.getElementById('name').value;

            if(input.length !== 0){
                error1.style.display = "none";
                nameField.style.border = "1px solid #444";
            }else {
                error1.style.display = "block";
                nameField.style.border = "1px solid #444"
            }
        }
        
        function usernameInput(){
            let input = document.getElementById('username').value;

            if(input.length !== 0){
                error2.style.display = "none";
                usernameField.style.border = "1px solid #444";
            }else {
                error2.style.display = "block";
                usernameField.style.border = "1px solid #444"
            }
        }

        function emailInput(){
            let input = document.getElementById('email').value;

            if(input.length !== 0){
                error3.style.display = "none";
                emailField.style.border = "1px solid #444";
            }else {
                error3.style.display = "block";
                emailField.style.border = "1px solid #444"
            }
        }

        function password1Input(){
            let input = document.getElementById('password1').value;
            
            if(input.length !== 0){
                password1Field.style.border = "1px solid #444";
            }else {
                password1Field.style.border = "1px solid #444"
            }

        }

        function password2Input(){
            let input = document.getElementById('password2').value;

            if(input.length !== 0){
                error4.style.display = "none";
                password2Field.style.border = "1px solid #444";
            }else {
                error4.style.display = "block";
                password2Field.style.border = "1px solid #444";
            }
        }
    </script>
    
@endsection