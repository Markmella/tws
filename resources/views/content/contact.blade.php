@extends('layout.app')

@section('content')

<div class="contact-container">
    <h2> Contact Us </h2>
    <p class="contact-text">    
        How can we help you? Just send us a message so we can assist you better! <br>
        We’ll get in touch with you as soon as we can.
    </p>

    <div class="contact-body">
        <form action="">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <textarea name="message-box" id="" cols="30" rows="10" placeholder="Type your message here..."></textarea>
            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>
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