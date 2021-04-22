@extends('layout.app')

@section('content')

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
                    <a href="">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="mailto:markmella09@gmail.com" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="/images/aunzo.png">
                <p class="info">
                    Mark Angelo Aunzo <br>
                    Editor / Designer <br>
                    21 years old
                </p>
                <div class="social-media">
                    <a href="">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="mailto:aunzoangelo6@gmail.com" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <img src="/images/valencia.png">
                <p class="info">
                    Joshua Ryan M. Valencia <br>
                    Administrator / Tester <br>
                    21 years old
                </p>
                <div class="social-media">
                    <a href="">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-github"></i>
                    </a>
                    <div class="contact-button">
                        <a href="mailto:markmella09@gmail.com" target="_blank"> Get in touch </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    @guest        
        <script>
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
    @endguest
    
@endsection