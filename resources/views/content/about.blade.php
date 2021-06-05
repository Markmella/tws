@extends('layout.master')

@section('title') TWS | About @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<div class="about-container">
    <h2> Who We Are </h2>
    <p class="about-text">    
        The World Scoop is the official news website, loved by many Filipino as it is one of the leading in news and 
        entertainment organization in the Philippines. From its humble beginnings to its undeniable successes, 
        the company has over 5 years of stories to tell.
        
        The website features the highlights of breaking news 24/7 about the issue of West Philippine Sea. 
    </p>

    <div class="team-container">
        <h2> The World Scoop Team </h2>
        <div class="content">
            <div class="profile">
                <img src="/images/mella.png">
                <p class="info">
                    Mark Julius P. Mella <br>
                    Main Programmer / Developer <br>
                    21 years old
                </p>
                <div class="social-media">
                    <a href="https://www.facebook.com/secrett14" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/secrett41" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/secrett14/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/Markmella" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=markmella09%40gmail.com&authuser=1" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="/images/aunzo.png">
                <p class="info">
                    Mark Angelo B. Aunzo <br>
                    Editor / Designer <br>
                    21 years old
                </p>
                <div class="social-media">
                    <a href="https://www.facebook.com/markangelo.aunzo/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/AngeloAunzo" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mark-angelo-aunzo-11347a210/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/Markangelo4349" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=aunzoangelo6%40gmail.com&authuser=1" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="/images/valencia.png">
                <p class="info">
                    Joshua Ryan M. Valencia <br>
                    Administrator / Tester <br>
                    23 years old
                </p>
                <div class="social-media">
                    <a href="https://www.facebook.com/piggyboyjoshua20" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/JoshuaRyanMVal1" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/joshua-ryan-valencia-b68314210/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/joshtine082619" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=joyshuavalencia20%40gmail.com&authuser=1" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="information">
            <div class="info">
                <h3> Visit Us </h3>
                <div class="icon-container">
                    <i class="fas fa-home"></i>
                </div>
                <p>
                    The World Scoop Corp.
                </p>
                <p>
                    89 C Santos St Ugong
                    Pasig City Philippines 1606
                </p>
            </div>
            <div class="info">
                <h3> Call Us </h3>
                <div class="icon-container">
                    <i class="fas fa-phone"></i>
                </div>
                <p> +6390 - 8656 - 0048 </p>
                <p> +6390 - 8656 - 0050 </p>
            </div>
            <div class="info">
                <h3> Follow Us </h3>
                <div class="icon-container">
                    <a href="" title="facebook">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="" title="twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection