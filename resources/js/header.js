    
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