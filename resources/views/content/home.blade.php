@extends('layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@guest        
    <script src="{{ asset('js/header.js') }}" defer></script>
@endguest

<div class="main-content">
    <div class="recent-post">
        {{-- <h4> Recent Post </h4> --}}
        <div class="post">
            <p class="title"> 
                <?php echo $title ?> 
            </p>
            
            <p class="date-time"> 
                <?php echo $datetime ?> 
            </p>

            <p class="author"> 
                <?php echo $author ?>  
            </p>
            
            <p class="text-content">
                <?php echo $content ?>
            </p>

            <div class="share-container">
                <p> Share </p>
                <a href="https://www.facebook.com/sharer/sharer.php?uhttps://www.twitch.tv/" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?source=https://www.youtube.com/watch?v=mIBs-QyQuyw&text=https://www.youtube.com/watch?v=mIBs-QyQuyw" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://nbafullmatch.com/pacers-vs-jazz/" target="_blank" title="LinedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="" title="Copy link">
                    <i class="fas fa-link"></i>
                </a>
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
                <a href="">
                    
                </a>
            </div>
        </div>
    </div>
</div>

    @guest
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
        </script>
    @endguest

@endsection