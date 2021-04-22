<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title> TWS | West Philippine Sea </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/disclaimer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <script type="text/javascript" src="{{ asset('js/all.js') }}" defer></script>
</head>
    <body>
        <div id="Home" class="header-container">
            <div class="header-content">
                <div class="brand">
                    <img src="/images/logo.JPG">
                    <h1> The World Scoop </h1>
                </div>
                <h1> Disputes on the West Philippine Sea </h1>
            </div>
        </div>
        <div class="navbar">
            <div class="navbar-content">
                <ul class="menu-list">
                    <div class="menu-icon close-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    @guest
                        <li id="home"><a href="{{ route('home') }}"> Home </a></li>
                        <li id="about"><a href="{{ route('about') }}"> About </a></li>
                        <li id="disclaimer"><a href="{{ route('disclaimer') }}"> Disclaimer </a></li>
                        <li id="contact"><a href="{{ route('contact') }}"> Contact </a></li>
                    @endguest
                    @auth
                        <li id="dashboard"><a href="{{ route('dashboard') }}"> Dashboard </a></li>
                        <li id="profile"><a href="">{{ auth()->user()->name }}</a></li>
                    @endauth
                </ul>
                <div class="menu-icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="button">
                    @guest
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Sign Up</a>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"> Logout </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
        
        @yield('content')

        <div class="footer">
            © 2021 The World Scoop. All Rights Reserved.
        </div>
        <div class="arrow">
            <a href="#Home"> <i class="fas fa-arrow-up"></i> </a>
        </div>
    </body>
</html>