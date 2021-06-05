@extends('layout.master')

@section('title') TWS | Login @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
<script src="{{ asset('js/login.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            width: '320',
            title: 'Invalid Login Details'
        })
    </script>
@endif

@if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '400',
            title: 'Your account has been Successfully Deleted'
        })
    </script>
@endif

<div class="login-register-form">
    <div class="form-container">
        <form class="forms" name="login_form" action="{{ route('login') }}" method="POST">
            <h2> Login to The World Scoop </h2>
            @csrf
            <input id="username" type="text" name="username" placeholder="Username"
                @error('username') style="border: 1px solid red" @enderror
                value="{{ old('username') }}">
            <div id="error1" class="error-message">
                @error('username')
                    {{ $message }}
                @enderror
            </div>
                
            <input id="password" type="password" name="password" placeholder="Password"
                @error('password') style="border: 1px solid red" @enderror
                value="{{ old('password') }}">
            <div id="error2" class="error-message">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
    
            <p id="show-password"> Show Password </p>
            <p id="hide-password" style="display: none"> Hide Password </p>

            <div class="remember">
                <input class="checkbox" type="checkbox" id="remember" name="remember">
                <label for="remember"> Remember Me </label>
            </div>
        </form>

        <div class="button-container">
            <input id="login" type="button" value="Log In">
            <div class="line">
                <div class="or">
                    OR
                </div>
            </div>
            <div class="btn-register">
                <a href="{{ route('register') }}"> Create New Account </a>
            </div>
        </div>
    </div>
</div>

@endsection