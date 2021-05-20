@extends('layout.master')

@section('title') TWS | Post @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/post.css') }}">
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
    {{-- <h2> Post Content Here </h2> --}}
    <h2> Welcome to T W S &nbsp;&nbsp; {{ auth()->user()->name }} </h2>
    <p class="post-text">    
        Submit your article below then it will be review by the admin
        if we're going to publish it. Thank you. Have a nice Day. 
    </p>
    <div class="post-body">
        <form action="{{ route('posts') }}" method="POST">
            <h3> Post Article </h3>
            @csrf
            <input id="title" type="text" name="title" placeholder="Title"
                @error('title') style="border: 1px solid red" onkeyup="titleInput()" @enderror
                value="{{ old('title') }}">
            @error('title')
                <div id="error1" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="author" type="text" name="author" placeholder="Author"
                @error('author') style="border: 1px solid red" onkeyup="authorInput()" @enderror
                value="{{ old('author') }}">
            @error('author')
                <div id="error2" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="source" type="text" name="source" placeholder="Source"
                @error('source') style="border: 1px solid red" onkeyup="sourceInput()" @enderror
                value="{{ old('source') }}">
            @error('source')
                <div id="error3" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <textarea id="article" name="article" id="" cols="30" rows="20" placeholder="Type your article here..."
                @error('article') style="border: 1px solid red" onkeyup="articleInput()" @enderror>{{ old('article') }}</textarea>
            @error('article')
                <div id="error4" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input class="submit-button" type="submit" name="submit" value="Submit">
        </form>
        
    </div>
</div>

    <script>
        let titleField = document.getElementById('title');
        let authorField = document.getElementById('author');
        let sourceField = document.getElementById('source');
        let articleField = document.getElementById('article');

        let error1 = document.getElementById('error1');
        let error2 = document.getElementById('error2');
        let error3 = document.getElementById('error3');
        let error4 = document.getElementById('error4');

        function titleInput(){
            let input = document.getElementById('title').value;

            if(input.length !== 0){
                error1.style.display = "none";
                titleField.style.border = "1px solid #444";
            }else {
                error1.style.display = "block";
                titleField.style.border = "1px solid red";
            }
        }

        function authorInput(){
            let input = document.getElementById('author').value;

            if(input.length !== 0){
                error2.style.display = "none";
                authorField.style.border = "1px solid #444";
            }else {
                error2.style.display = "block";
                authorField.style.border = "1px solid red";
            }
        }

        function sourceInput(){
            let input = document.getElementById('source').value;

            if(input.length !== 0){
                error3.style.display = "none";
                sourceField.style.border = "1px solid #444";
            }else {
                error3.style.display = "block";
                sourceField.style.border = "1px solid red";
            }
        }

        function articleInput(){
            let input = document.getElementById('article').value;

            if(input.length !== 0){
                error4.style.display = "none";
                articleField.style.border = "1px solid #444";
            }else {
                error4.style.display = "block";
                articleField.style.border = "1px solid red";
            }
        }
    </script>

@endsection