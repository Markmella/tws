@extends('layout.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<div class="main-content">
    <div class="recent-post">
        {{-- <h4> Recent Post </h4> --}}
        <div class="post">
            <p class="title"> 
                {{ $title }}
            </p>
            
            <p class="date-time"> 
                {{ $datetime }}
            </p>

            <p class="author"> 
                {{ $author }}
            </p>
            
            <p class="text-content">
                <?php echo $content ?>
            </p>

            <div class="share-container">
                <p> Share </p>

                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $source }}" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?source={{ $source }}&text={{ $source }}" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $source }}" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <input id="source" type="text" value="{{ $source }}">
                <button id="copy" title="Copy">
                    <i class="fas fa-link"></i>
                </button>

                <p> <a class="source" href="{{ $source }}" target="_blank"> Source </a> </p>
            </div>
        </div>
    </div>
    <div class="topic-content">
        <div class="searchBar">
            <input id="search-bar" type="text" placeholder="Search topic here...">
        </div>
        <h2> Topics </h2>
        <div class="all-topics">
            <div class="topic">
                <a href="/?article=0">
                    China, Philippine defense chiefs discuss territorial dispute
                </a>
            </div>
            <div class="topic">
                <a href="/?article=1">
                    [OPINION] Law and justice in the West Philippine Sea
                </a>
            </div>
            <div class="topic">
                <a href="/?article=2">
                    Philippines' conflict in West PH Sea is with China only: Locsin
                </a>
            </div>
            <div class="topic">
                <a href="/?article=3">
                    US-Philippines officials discuss concerns over China's ships
                </a>
            </div>
            <div class="topic">
                <a href="/?article=4">
                    Philippines, US launch military drills amid South China Sea tensions
                </a>
            </div>
            <div class="topic">
                <a href="/?article=5">
                    Philippines summons Chinese ambassador over reef dispute
                </a>
            </div>
            <div class="topic">
                <a href="/?article=6">
                    PH sends more patrol vessels to West Philippine Sea as China ships linger
                </a>
            </div>
        </div>
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