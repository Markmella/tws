@extends('layout.master')

@section('title') TWS | Register @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
<script src="{{ asset('js/register.js') }}" defer></script>
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
    <form class="register-form" action="{{ route('register') }}" method="POST">
        <h2> Register </h2>
        @csrf
        <input id="name" type="text" name="name" placeholder="Name"
            @error('name') style="border: 1px solid" @enderror
            value="{{ old('name') }}">
            <div id="error1" class="error-message">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

        <input id="username" type="text" name="username" placeholder="Username"
            @error('username') style="border: 1px solid red" @enderror
            value="{{ old('username') }}">
            <div id="error2" class="error-message">
                @error('username')
                    {{ $message }}
                @enderror
            </div>

        <input id="email" type="text" name="email" placeholder="Email"
            @error('email') style="border: 1px solid red" @enderror
            value="{{ old('email') }}">
            <div id="error3" class="error-message">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

        <input id="password1" type="password" name="password" placeholder="Password"
            @error('password') style="border: 1px solid red" @enderror
            value="{{ old('password') }}">

        <input id="password2" type="password" name="password_confirmation" placeholder="Repeat Password"
            @error('password') style="border: 1px solid red" @enderror
            value="{{ old('password_confirmation') }}">
            <div id="error4" class="error-message">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

        <p id="show-password"> Show Password </p>
        <p id="hide-password" style="display: none"> Hide Password </p>

        <input type="submit" value="Sign Up">
    </form>
</div>
    
<script>
    let showPassword = document.getElementById("show-password");
    let hidePassword = document.getElementById("hide-password");
    let password1 = document.getElementById("password1");
    let password2 = document.getElementById("password2");

    showPassword.addEventListener("click", function(){
        if(password1.type === "password" || password2.type === "password"){
            password1.setAttribute("type", "text");
            password2.setAttribute("type", "text");
            showPassword.style.display = "none";
            hidePassword.style.display = "block";
        }
    });

    hidePassword.addEventListener("click", function(){
        if(password1.type === "text" || password2.type === "password"){
            password1.setAttribute("type", "password");
            password2.setAttribute("type", "password");
            hidePassword.style.display = "none";
            showPassword.style.display = "block";
        }
    });
</script>

@endsection