@extends('layout.master')

@section('title') TWS | Profile @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<script src="{{ asset('js/profile.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Profile Successfully Updated'
        })
    </script>
@endif

@if (session('updated-password'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Password Successfully Updated'
        })
    </script>
@endif

@if (session('updated-info'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '400',
            title: 'Profile Infomation Successfully Updated'
        })
    </script>
@endif

<div class="profile-container">
    <div class="profile-content">
        <div class="profile">
            <img id="profile-picture"
                @if ($users->image == NULL)
                    src="{{ asset('images/profile.png') }}"
                @else
                    src="{{ asset('uploads/' . $users->image) }}"
                @endif
            >
            <div class="camera">
                <i class="fas fa-camera"></i>
            </div>
        </div>

        <div class="information">
            <form action="{{ route('update-information', $users->id) }}" method="POST">
                @csrf
                <p class="fullname"> <input id="fullname" name="name" type="text" value="{{ $users->name }}" disabled> </p>
                <p> Username:  <input id="username" name="username" type="text" value="{{ $users->username }}" disabled> </p>
                <p> Email: <input id="email" name="email" type="text" value="{{ $users->email }}" disabled> </p>
                <div id="error" class="error-message error-password">
                    @error('name')
                        {{ $message }}
                    @enderror
                    @error('username')
                        {{ $message }}
                    @enderror
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="information-button">       
                    <input type="submit" name="submit" value="Save">
                    <input type="submit" id="cancel-info" value="Cancel">
                </div>
            </form>
        </div>

        <button id="change-information-button" type="submit"
            @error ('password') style="display: none" @enderror
            @if (session('error')) style="display: none" @endif>
            Edit Account Information
        </button>

        <button id="change-password-button" type="submit"
            @error ('password') style="display: none" @enderror
            @if (session('error')) style="display: none" @endif>
            Change Password 
        </button>

        <div class="password-container"
            @error ('password') style="display: flex" @enderror
            @if (session('error')) style="display: flex" @endif>
            <div class="btn-save-password">
                <form action="{{ route('update-password', $users->id) }}" method="POST">
                    @csrf
                    <input id="current" type="password" name="current_password" placeholder="Current Password"
                        @error('password') style="border: 1px solid red" @enderror
                        @if (session('error')) style="border: 1px solid red" @endif
                        value="{{ old('current_password') }}">

                        <div class="error-message current-password">
                            @if (session('error'))
                                Invalid Current Password
                            @endif
                        </div>
         
                    <input id="password1" type="password" name="password" placeholder="New Password"
                        @error('password') style="border: 1px solid red" @enderror
                        value="{{ old('password') }}">

                    <input id="password2" type="password" name="password_confirmation" placeholder="Confirm New Password"
                        @error('password') style="border: 1px solid red" @enderror
                        value="{{ old('password_confirmation') }}">

                        <div id="error" class="error-message error-password">
                            @error('password')
                                {{ $message }}
                            @enderror
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>

                        <p id="show-password"> Show Password </p>
                        <p id="hide-password" style="display: none"> Hide Password </p>

                    <div class="save-password">       
                        <input type="submit" name="submit" value="Save">
                        <input type="submit" id="cancel-button" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="delete-account">
        <form action="{{ route('delete-account', $users->id) }}" name="delete_form" method="POST">
            @csrf
        </form>
        <button id="delete" type="button"> Delete Account </button>
    </div>
</div>

<div class="change-picture-container" @error ('image') style="display: flex" @enderror>
    <div class="exit">
        <i class="fas fa-times"></i>
    </div>
    <form action="{{ route('update-profile', $users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="profile-preview">
            <img id="profile-prev"
                @if ($users->image == NULL)
                    src="{{ asset('images/profile.png') }}"
                @else
                    src="{{ asset('uploads/' . $users->image) }}"
                @endif
            >
        </div>
        <div class="error-message">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="btn-change-profile">
            <input type="file" id="file-ip-1" accept="image/*">
            <input type="file" name="image" id="file" accept="image/*">
            <label for="file"> Choose Profile </label>
        </div>
        <div class="btn-save-profile">
            <input type="submit" name="submit" value="Save">
            <input type="submit" id="cancel" value="Cancel">
        </div>
    </form>
</div>

@endsection