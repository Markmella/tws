<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script type="text/javascript" src="{{ asset('js/fontAwesomeIcon.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @guest <script src="{{ asset('js/header.js') }}" defer></script> @endguest
    @auth <script src="{{ asset('js/dashboard.js') }}" defer></script> @endauth
    <title> @yield('title') </title>
</head>
    <body>
        <div id="Home" class="header-container">
            <div class="header-content">
                <div class="brand">
                    <a href="{{ route('home') }}" title="Home">
                        <img src="{{ asset('images/logo.JPG') }}">
                    </a>
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
                        <li id="home">
                            <i class="fas fa-home"></i>
                            <a href="{{ route('home') }}"> Home </a>
                        </li>
                        @auth
                            <li id="dashboard">
                                <i class="fas fa-columns"></i>
                                <a href="{{ route('dashboard') }}"> Dashboard </a>
                            </li>
                            <li id="post">
                                <i class="fas fa-edit"></i>
                                <a href="{{ route('posts') }}"> Post Article </a>
                            </li>
                            <li id="profile">
                                <img 
                                    @if (auth()->user()->image == NULL)
                                        src="{{ asset('images/profile.png') }}"
                                    @else
                                        src="{{ asset('uploads/' . auth()->user()->image) }}"
                                    @endif
                                >
                                <a href="{{ route('profile', auth()->user()->id) }}">
                                    {{ auth()->user()->name }}
                                </a>
                            </li>
                        @endauth
                        @guest
                            <li id="about">
                                <i class="fas fa-users"></i>
                                <a href="{{ route('about') }}"> About </a>
                            </li>
                            <li id="disclaimer">
                                <i class="fas fa-info-circle"></i>
                                <a href="{{ route('disclaimer') }}"> Disclaimer </a>
                            </li>
                            <li id="contact">
                                <i class="fas fa-envelope-open-text"></i>
                                <a href="{{ route('contact') }}"> Contact </a>
                            </li>
                        @endguest
                </ul>
                <div class="menu-icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="button">
                    @guest
                        <a href="{{ route('login') }}"> Login &nbsp;
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    @endguest
                    @auth
                        <form name="logout_form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        <button id="submit" type="button"> Log Out &nbsp;
                            <i class="fas fa-sign-out-alt"></i> 
                        </button>
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

        
        @auth
        <script>
            let btnLogout = document.getElementById('submit');

            btnLogout.addEventListener('click', function(){
                Swal.fire({
                    width: 250,
                    title: 'Logging out',
                    timer: 1500,
                        didOpen: () => {
                            Swal.showLoading()
                        },
                    }).then(() => {
                        logout_form.submit();
                })
            });
        </script>
        @endauth
    </body>
</html>