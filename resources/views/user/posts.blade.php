@extends('layout.master')

@section('title') TWS | Post @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/post.css') }}">
<script src="{{ asset('js/post-update.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Article Successfully Submitted'
        })
    </script>
@endif

<div class="post-container">
    <h2> Welcome to T W S </h2>
    <h2> {{ auth()->user()->name }} </h2>
    <p class="post-text">    
        Submit your article below then it will be review by the admin
        if we're going to publish it. Thank you. Have a nice Day. 
    </p>
    <div class="post-body">
        <form action="{{ route('posts') }}" method="POST">
            <h3> Post Article </h3>
            @csrf
            <input id="title" type="text" name="title" placeholder="Title" autofocus
                @error('title') style="border: 1px solid red" @enderror
                value="{{ old('title') }}">
            @error('title')
                <div id="error1" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="author" type="text" name="author" placeholder="Author"
                @error('author') style="border: 1px solid red" @enderror
                value="{{ old('author') }}">
            @error('author')
                <div id="error2" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="source" type="text" name="source" placeholder="Source"
                @error('source') style="border: 1px solid red" @enderror
                value="{{ old('source') }}">
            @error('source')
                <div id="error3" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <textarea id="article" name="article" id="" cols="30" rows="20" placeholder="Type your article here..."
                @error('article') style="border: 1px solid red" @enderror>{{ old('article') }}</textarea>
            @error('article')
                <div id="error4" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>
        
    </div>
</div>

@endsection