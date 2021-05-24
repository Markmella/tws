
let searchBar = document.getElementById("search-bar");
let rows = document.querySelectorAll(".topic a");

searchBar.addEventListener('keyup', function(){
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
});


let link = document.getElementById("source");
let btnCopy = document.getElementById("copy");

btnCopy.addEventListener('click', function(){
    link.select();
    document.execCommand("Copy");

    Swal.fire({
        width: 300,
        title: 'Copied to Clipboard',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    });
});