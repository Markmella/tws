@extends('layout.master')

@section('title') TWS | West Philippine Sea @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<div class="main-content">
    <div class="top-container">
        <div class="recent-post">
            {{-- <h4> Recent Post </h4> --}}
            <div class="post">
                
                <p class="title"> 
                    {{ $latest->title }}
                </p>
                
                <p class="date-time"> 
                    {{ $latest->created_at->format('M d, Y') }} &nbsp;&nbsp; 
                    <span> {{ $latest->updated_at->diffForHumans() }} </span>
                </p>
    
                <p class="author"> 
                    {{ $latest->author }}
                </p>
                
                <textarea disabled><?php echo $latest->article ?></textarea>
              
                <div class="share-container">
                    <p> Share </p>
    
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $latest->source }}" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?source={{ $latest->source }}&text={{ $latest->source }}" target="_blank" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $latest->source }}" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
    
                    <input id="source" type="text" value="{{ $latest->source }}">
                    <button id="copy" title="Copy">
                        <i class="fas fa-link"></i>
                    </button>
    
                    <p> <a class="source" href="{{ $latest->source }}" target="_blank"> Source </a> </p>
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

    <script>
        let searchBar = document.getElementById("search-bar");
        let rows = document.querySelectorAll(".topic a");

        searchBar.addEventListener('keyup', filterInput);

        function filterInput(){
            
            let searchInput = document.getElementById("search-bar").value.toUpperCase();
            let topicContainer = document.querySelectorAll(".topic");

            console.log(searchInput);

            for(let i = 0; i < rows.length; i++){
                let inputs = rows[i].innerHTML;
                if(inputs.toUpperCase().indexOf(searchInput) > -1){
                    topicContainer[i].style.display = "block";    
                }else{
                    topicContainer[i].style.display = "none";
                }
                
            }
        }

        let link = document.getElementById("source");
        let btnCopy = document.getElementById("copy");

        btnCopy.addEventListener('click', copyLink);

        function copyLink(){
            link.select();
            document.execCommand("Copy");

            Swal.fire({
                title: 'Copied to Clipboard',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        }

    </script>
    
@endsection