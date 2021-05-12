@extends('layout.master')

@section('title') TWS | Contact @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

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

@endsection