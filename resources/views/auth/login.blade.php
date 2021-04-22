@extends('layout.app')

@section('content')
    <div class="login-register-form">
        <form class="forms" action="{{ route('login') }}" method="POST">
            <h2> Login </h2>
            @csrf
            @if (session('status'))
                <div class="error-login">
                    {{ session('status') }}
                </div>
            @endif
            <input id="email" type="text" name="email" placeholder="Email"
                @error('email') style="border: 2px solid red" onkeyup="emailInput()" @enderror
                value="{{ old('email') }}">
            @error('email')
                <div id="error1" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="password" type="password" name="password" placeholder="Password"
                @error('password') style="border: 2px solid red" onkeyup="passwordInput()" @enderror>
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
                emailField.style.borderColor = "#ccc";
            }else {
                error1.style.display = "block";
                emailField.style.borderColor = "red";
            }
        }

        function password2Input(){
            let input = document.getElementById('password').value;

            if(input.length !== 0){
                error2.style.display = "none";
                passwordField.style.borderColor = "#ccc";
            }else {
                error2.style.display = "block";
                passwordField.style.borderColor = "red";
            }
        }

        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const closeBtn = document.querySelector(".close-btn");

        const homeBtn = document.getElementById("home");
        const aboutBtn = document.getElementById("about");
        const disclaimerBtn = document.getElementById("disclaimer");
        const contactBtn = document.getElementById("contact");

        menuBtn.addEventListener("click", function(){
            menu.classList.add("active");
        });

        closeBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        homeBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        aboutBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        disclaimerBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        contactBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });
    </script>
@endsection