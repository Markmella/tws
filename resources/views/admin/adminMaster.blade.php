<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/adminMaster.css') }}">
    <script type="text/javascript" src="{{ asset('js/fontAwesomeIcon.js') }}" defer></script>
    <title> @yield('title') </title>
</head>
    <body>
        <div class="navbar">
            <div class="navbar-content">
                <ul class="menu-list">
                    <div class="menu-icon close-btn">
                        <i class="fas fa-times"></i>
                    </div>
                        <li id="home"><a href="{{ route('admin') }}"> Home </a></li>
                </ul>
                <div class="menu-icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="button">
                    {{-- @if (auth()->admin()) --}}
                        <form name="admin_logout_form" action="{{ route('admin-logout') }}" method="POST">
                            @csrf
                        </form>
                        <button id="submit" type="button"> Logout </button>
                    {{-- @else --}}
                        <a href="{{ route('admin-login') }}">Login</a>
                    {{-- @endif --}}
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
                        admin_logout_form.submit();
                })
            });
        </script>
    </body>
</html>