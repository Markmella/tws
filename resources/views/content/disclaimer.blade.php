@extends('layout.app')

@section('content')
<div class="disclaimer">
    <div class="disclaimer-content">
        <p>
            <span> Disclaimer </span> <br>
            Disclaimers for The World Scoop <br><br>
            
            All the information on this website is published in good faith and for general information purpose only.  
            The World Scoop does not make any warranties about the completeness, reliability and accuracy of this information. 
            Any action you take upon the information you find on this website is strictly at your own risk. 
            The World Scoop will not be liable for any losses and/or damages in connection with the use of our website. <br><br>
            
            From our website, you can visit other websites by following hyperlinks to such external sites. 
            While we strive to provide only quality links to useful and ethical websites, we have no control over the content 
            and nature of these sites. These links to other websites do not imply a recommendation for all the content found 
            on these sites. Site owners and content may change without notice and may occur before we have the opportunity to 
            remove a link which may have gone ‘bad’. <br><br>
            
            Please be also aware that when you leave our website, other sites may have different privacy policies and terms 
            which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their 
            “Terms of Service” before engaging in any business or uploading any information. <br><br>
            
            Consent <br>
            By using our website, you hereby consent to our disclaimer and agree to its terms. <br><br>
            
            Update <br>
            Should we update, amend or make any changes to this document, those changes will be prominently posted here.
        </p>
    </div>
    
    <div class="website-content">
        <h2> Websites </h2>
        <div class="website-links">
            <div class="link">
                <a href="https://www.inquirer.net/" target="_blank">
                    Daily Inquirer
                </a>
            </div>
            <div class="link">
                <a href="https://news.abs-cbn.com/" target="_blank">
                    ABS-CBN
                </a>
            </div>
            <div class="link">
                <a href="https://www.gmanetwork.com/" target="_blank">
                    GMA News
                </a>
            </div>
            <div class="link">
                <a href="https://www.rappler.com/" target="_blank">
                    Rappler
                </a>
            </div>
            <div class="link">
                <a href="https://edition.cnn.com/" target="_blank">
                    CNN
                </a>
            </div>
            <div class="link">
                <a href="https://thediplomat.com/" target="_blank">
                    The Diplomat
                </a>
            </div>
            <div class="link">
                <a href="https://apnews.com/" target="_blank">
                    AP News
                </a>
            </div>
            <div class="link">
                <a href="https://www.bbc.com/news/world" target="_blank">
                    BBC News
                </a>
            </div>
            <div class="link">
                <a href="https://www.buzzfeednews.com/" target="_blank">
                    Buzzfeed News
                </a>
            </div>
            <div class="link">
                <a href="https://www.cbsnews.com/" target="_blank">
                    CBS News
                </a>
            </div>
        </div>
    </div>
</div>


    @guest        
        <script>
            const menu = document.querySelector(".menu-list");
            const menuBtn = document.querySelector(".menu-btn");
            const closeBtn = document.querySelector(".close-btn");

            const homeBtn = document.getElementById("home");
            const aboutBtn = document.getElementById("about");
            const disclaimerBtn = document.getElementById("disclaimer");
            const contactBtn = document.getElementById("contact");

            menuBtn.addEventListener("click", function(){
                menu.classList.add("active");
            });

            closeBtn.addEventListener("click", function(){
                menu.classList.remove("active");
            });

            homeBtn.addEventListener("click", function(){
                menu.classList.remove("active");
            });

            aboutBtn.addEventListener("click", function(){
                menu.classList.remove("active");
            });

            disclaimerBtn.addEventListener("click", function(){
                menu.classList.remove("active");
            });

            contactBtn.addEventListener("click", function(){
                menu.classList.remove("active");
            });
        </script>
    @endguest
@endsection

