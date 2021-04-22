@extends('layout.app')

@section('content')

<div class="dashboard-container">
    <h2> Dashboard Content Here </h2>
    {{-- <h2> Welcome to TWS {{ auth()->user()->name }} </h2>
    <p class="dashboard-text">    
        Write your article below then it will be review by the admin
        if we're going to publish it. Thank you. Have a nice Day. 
    </p>
    <div class="dashboard-body">
        <form action="">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="author" placeholder="Author">
            <input type="text" name="source" placeholder="Source">
            <textarea name="message-box" id="" cols="30" rows="10" placeholder="Type your article here..."></textarea>
            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>
    </div> --}}
</div>

    <script>
        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const closeBtn = document.querySelector(".close-btn");

        const dashboardBtn = document.getElementById("dashboard");
        const profileBtn = document.getElementById("profile");

        menuBtn.addEventListener("click", function(){
            menu.classList.add("active");
        });

        closeBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        dashboardBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });

        profileBtn.addEventListener("click", function(){
            menu.classList.remove("active");
        });
    </script>
@endsection