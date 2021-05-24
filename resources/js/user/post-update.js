
let titleField = document.getElementById('title');
let authorField = document.getElementById('author');
let sourceField = document.getElementById('source');
let articleField = document.getElementById('article');

let error1 = document.getElementById('error1');
let error2 = document.getElementById('error2');
let error3 = document.getElementById('error3');
let error4 = document.getElementById('error4');


titleField.addEventListener('keyup', function(){
    let input = document.getElementById('title').value;

    if(input.length !== 0){
        error1.style.display = "none";
        titleField.style.border = "1px solid #444";
    }else {
        error1.style.display = "block";
        titleField.style.border = "1px solid red";
    }
});


authorField.addEventListener('keyup', function(){
    let input = document.getElementById('author').value;

    if(input.length !== 0){
        error2.style.display = "none";
        authorField.style.border = "1px solid #444";
    }else {
        error2.style.display = "block";
        authorField.style.border = "1px solid red";
    }
});


sourceField.addEventListener('keyup', function(){
    let input = document.getElementById('source').value;

    if(input.length !== 0){
        error3.style.display = "none";
        sourceField.style.border = "1px solid #444";
    }else {
        error3.style.display = "block";
        sourceField.style.border = "1px solid red";
    }
});


articleField.addEventListener('keyup', function(){
    let input = document.getElementById('article').value;

    if(input.length !== 0){
        error4.style.display = "none";
        articleField.style.border = "1px solid #444";
    }else {
        error4.style.display = "block";
        articleField.style.border = "1px solid red";
    }
});