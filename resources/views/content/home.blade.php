@extends('layout.master')

@section('title') TWS | West Philippine Sea @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="{{ asset('js/home.js') }}" defer></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<div class="main-content">
    <div class="top-container">
        <div class="recent-post">
            <div class="post">
                
                @if ($posts->count())
                    <?php
                        $articleTitle = $latest->title;
                        $articleDate = $latest->created_at->format('M d, Y');
                        $articleTime = $latest->updated_at->diffForHumans();
                        $articleAuthor = $latest->author;
                        $articleContent = $latest->article;
                    ?>
                @else
                    <?php
                        $articleTitle = $title;
                        $articleDate = $datetime;
                        $articleTime = '10 days ago';
                        $articleAuthor = $author;
                        $articleContent = $article;
                    ?>
                @endif

                <p class="title">
                    {{ $articleTitle }}
                </p>
                
                <p class="date-time">
                    {{ $articleDate }} &nbsp;&nbsp; 
                    <span> {{ $articleTime }} </span>
                </p>
    
                <p class="author"> 
                    {{ $articleAuthor }}
                </p>
                
                <textarea disabled><?php echo $articleContent ?></textarea>
            
                <div class="share-container">
                    <p> Share </p>
                    
                    @if ($posts->count())
                        <?php $latestSource = $latest->source ?>
                    @else
                        <?php $latestSource = $source ?>
                    @endif 
                    
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $latestSource }}" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?source={{ $latestSource }}&text={{ $latestSource }}" target="_blank" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $latestSource }}" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
    
                    <input id="source" type="text" value="{{ $latestSource }}">
                    <button id="copy" title="Copy">
                        <i class="fas fa-link"></i>
                    </button>
    
                    <p> <a class="source" href="{{ $latestSource }}" target="_blank"> Source </a> </p>
                </div>
            </div>
        </div>
        <div class="topic-content">
            <div class="searchBar">
                <input id="search-bar" type="text" placeholder="Search topic here...">
            </div>
            <h2> Topics </h2>
            <div class="all-topics">
                @foreach ($posts as $post)
                    <div class="topic">
                        <a href="/?article={{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="all-article">
        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="article">
                    <div class="article-content">
                        <p class="title"> {{ $post->title }} </p>
                        <p class="date-time"> {{ $post->updated_at->format('M d, Y') }} &nbsp;&nbsp; 
                            <span> {{ $post->updated_at->diffForHumans() }} </span>
                        </p>
                        <p class="author"> {{ $post->author }} </p>
                        <p class="text-content"> {{ $post->article }} </p>
                    </div>
                    <div class="article-button">
                        <a href="/?article={{ $post->id }}"> Read more </a>
                    </div>
                </div>              
            @endforeach
        @endif
    </div>
</div>

@endsection