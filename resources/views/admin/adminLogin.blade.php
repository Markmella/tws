@extends('admin.adminMaster')

@section('title') TWS | Admin Login @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/adminLogin.css') }}">
<script src="{{ asset('js/login.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            width: '320',
            title: 'Invalid Admin Details'
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
        <form class="forms" name="login_form" action="{{ route('admin-login') }}" method="POST">
            <h2> Administrator </h2>
            @csrf
            <input id="username" type="text" name="username" placeholder="Username" autofocus
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

        </form>

        <div class="button-container">
            <input id="submit" type="button" value="Log In">
        </div>
    </div>
</div>

@endsection