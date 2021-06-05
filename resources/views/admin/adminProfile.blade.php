@extends('admin.adminMaster')

@section('title') TWS | Admin Profile @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/adminProfile.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Admin Account Successfully Created'
        })
    </script>
@endif

<div class="adminProfile-container">
    <div class="adminProfile-content">
        <p class="admin-name"> Admin Name: 
            {{ $username }}
        </p>

        <div class="btn-create">
            <i class="fas fa-plus-circle"></i>
            Create Admin Account
        </div>

        <form id="create-form" action="{{ route('admin-register') }}" method="POST">
            @csrf
            <div class="label">
                Admin Username
            </div>
            <input type="text" name="username" required>

            <div class="label">
                Admin Pasword
            </div>
            <input id="password" type="password" name="password" required>

            <p id="show-password"> Show Password </p>
            <p id="hide-password" style="display: none"> Hide Password </p>

            <div class="btn-save-admin-profile">
                <input type="submit" value="Save">
                <input type="submit" id="cancel-password" value="Cancel">
            </div>
        </form>

    </div>


    {{-- {{ route('admin-register') }} --}}
    <div class="delete-account">
        <form action="" name="admin_delete_form" method="POST">
            @csrf
        </form>
        <button id="delete" type="button"> Delete My Admin Account </button>
    </div>

</div>

<script>
    let showPassword = document.getElementById("show-password");
    let hidePassword = document.getElementById("hide-password");
    let password = document.getElementById("password");

    showPassword.addEventListener("click", function(){
        if(password.type === "password"){
            password.setAttribute("type", "text");
            showPassword.style.display = "none";
            hidePassword.style.display = "block";
        }
    });

    hidePassword.addEventListener("click", function(){
        if(password.type === "text"){
            password.setAttribute("type", "password");
            hidePassword.style.display = "none";
            showPassword.style.display = "block";
        }
    });

    let btnCancelPassword = document.getElementById("cancel-password");

    btnCancelPassword.addEventListener('click', function(e){
        e.preventDefault();
        Swal.fire({
            width: 150,
            timer: 1500,
                didOpen: () => {
                    Swal.showLoading()
                },
            }).then(() => {
                location.reload();
        });
    });



    // Delete Account
    let btnDelete = document.getElementById('delete');

    btnDelete.addEventListener('click', function(){
        Swal.fire({
            width: 320,
            title: 'Deleting Admin Account...',
            timer: 3000,
                didOpen: () => {
                    Swal.showLoading()
                },
            }).then(() => {
                admin_delete_form.submit();
        });
    });
    // Delete Account


</script>

@endsection