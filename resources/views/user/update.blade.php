@extends('layout.master')

@section('title') TWS | Update Article @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/post-update.css') }}">
<script src="{{ asset('js/post-update.js') }}" defer></script>

<div class="post-container">
    <div class="post-body">
        <form action="{{ route('update', $post->id) }}" method="POST">
            <h3> Update Article </h3>
            @csrf

            <div class="label">
                Title
            </div>
            <input id="title" type="text" name="title"
                @error('title') style="border: 1px solid red" @enderror
                value="{{ $post->title }}">
            @error('title')
                <div id="error1" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <div class="label">
                Author
            </div>
            <input id="author" type="text" name="author"
                @error('author') style="border: 1px solid red" @enderror
                value="{{ $post->author }}">
            @error('author')
                <div id="error2" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <div class="label">
                Source
            </div>
            <input id="source" type="text" name="source" placeholder="URL link"
                @error('source') style="border: 1px solid red" @enderror
                value="{{ $post->source }}">
            @error('source')
                <div id="error3" class="error-message">
                    {{ $message }}
                </div>
            @enderror

            <div class="label">
                Article
            </div>
            <textarea id="article" name="article" id="" cols="30" rows="20" placeholder="Type your article here..."
                @error('article') style="border: 1px solid red" @enderror>{{ $post->article }}</textarea>
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