@extends('layout.master')

@section('title') TWS | Update Article @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/update.css') }}">
<script src="{{ asset('js/post-update.js') }}" defer></script>

<div class="post-container">
    <div class="post-body">
        <form action="{{ route('update', $posts->id) }}" method="POST">
            <h3> Update Article </h3>
            @csrf
            <input id="title" type="text" name="title" placeholder="Title"
                @error('title') style="border: 1px solid red" onkeyup="titleInput()" @enderror
                value="{{ $posts->title }}">
            @error('title')
                <div id="error1" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="author" type="text" name="author" placeholder="Author"
                @error('author') style="border: 1px solid red" onkeyup="authorInput()" @enderror
                value="{{ $posts->author }}">
            @error('author')
                <div id="error2" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input id="source" type="text" name="source" placeholder="Source"
                @error('source') style="border: 1px solid red" onkeyup="sourceInput()" @enderror
                value="{{ $posts->source }}">
            @error('source')
                <div id="error3" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <textarea id="article" name="article" id="" cols="30" rows="20" placeholder="Type your article here..."
                @error('article') style="border: 1px solid red" onkeyup="articleInput()" @enderror>{{ $posts->article }}</textarea>
            @error('article')
                <div id="error4" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <input class="submit-button" type="submit" name="submit" value="Update Article">
        </form>
        
    </div>
</div>

@endsection