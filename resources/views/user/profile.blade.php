@extends('layout.master')

@section('title') TWS | Profile @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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

@if (session('updated'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Password Successfully Updated'
        })
    </script>
@endif

{{-- @if (session('error')) --}}
@error('password')
    <script>
        Swal.fire({
            icon: 'error',
            width: '320',
            title: {{ $message }}
        })
    </script>
@enderror
{{-- @endif --}}

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
        <p class="fullname"> {{ $users->name }} </p>
        <p> <span> Username: </span> {{ $users->username }} </p>
        <p> <span> Email: </span> {{ $users->email }} </p>
        <button id="change-password-button" type="submit"
            @error ('password') style="display: none" @enderror> 
            Change Password 
        </button>
        <div class="password-container" @error ('password') style="display: flex" @enderror>
            <div class="btn-save-password">
                <form action="{{ route('update-password', $users->id) }}" method="POST">
                    @csrf
                    <input type="password" name="current_password" placeholder="Current Password">
                    <input type="password" name="password" placeholder="New Password">
                    <input type="password" name="password_confirmation" placeholder="Repeat new Password">
                    <div class="save-password">       
                        <input type="submit" name="submit" value="Save">
                        <input type="submit" id="cancel-button" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
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
            <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
            <input type="file" name="image" id="file" accept="image/*" onchange="showPreview(event);">
            <label for="file"> Choose Profile </label>
        </div>
        <div class="btn-save-profile">
            <input type="submit" name="submit" value="Save">
            <input type="submit" id="cancel" value="Cancel">
        </div>
    </form>
</div>


    <script>
        // Display profile picture
        let profilePicture = document.getElementById("profile-picture");
        let source = document.getElementById("profile-picture").src;

        profilePicture.addEventListener('click', function(){
            Swal.fire({
                imageUrl: source,
                imageWidth: 300,
                imageHeight: 300,
                showConfirmButton: false,
                width: '350',
            });
        });
        // Display profile picture




        // For change password container
        let changePasswordBtn = document.getElementById("change-password-button");
        let savehangePasswordBtn = document.getElementById("save-password-button");
        let changePasswordCon = document.querySelector(".password-container");

        changePasswordBtn.addEventListener('click', function(){
            changePasswordBtn.style.display = "none";
            changePasswordCon.style.display = "flex";
        });

        let btnCancelPassword = document.getElementById("cancel-button");

        btnCancelPassword.addEventListener('click', function(e){
            e.preventDefault();
            changePasswordCon.style.display = "none";
            changePasswordBtn.style.display = "flex";
            window.location.reload();
        });
        // For change password container




        // For camera icon
        let errorMessage = document.querySelector(".error-message");
        let btnCamera = document.querySelector(".camera");

        let profileCon = document.querySelector(".profile-container");
        let changePictureCon = document.querySelector(".change-picture-container");
        let btnExit = document.querySelector(".exit");

        btnCamera.addEventListener('click', function(){
            changePasswordBtn.disabled = true;
            changePictureCon.style.display = "block";
            profileCon.style.opacity = ".2";
        });

        btnExit.addEventListener('click', function(){
            changePasswordBtn.disabled = false;
            errorMessage.style.display = "none";
            changePictureCon.style.display = "none";
            profileCon.style.opacity = "1";
        });
        // For camera icon




        // For change profile container
        let btnChangeProfile = document.querySelector(".btn-change-profile");
        let btnSaveProfile = document.querySelector(".btn-save-profile");
        let btnCancel = document.getElementById("cancel");

        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("profile-prev");
                preview.src = src;
                btnChangeProfile.style.display = "none";
                btnSaveProfile.style.display = "flex";
            }
        }

        btnCancel.addEventListener('click', function(e){
            e.preventDefault();
            errorMessage.style.display = "none";
            btnSaveProfile.style.display = "none";
            btnChangeProfile.style.display = "flex";
        });
        // For change profile container





    </script>

@endsection