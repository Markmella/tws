const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const closeBtn = document.querySelector(".close-btn");

const dashboardBtn = document.getElementById("dashboard");
const postBtn = document.getElementById("post");
const profileBtn = document.getElementById("profile");

menuBtn.addEventListener("click", function(){
    menu.classList.add("active");
});

closeBtn.addEventListener("click", function(){
    menu.classList.remove("active");
});

dashboardBtn.addEventListener("click", function(){
    menu.classList.remove("active");
});

postBtn.addEventListener("click", function(){
    menu.classList.remove("active");
});

profileBtn.addEventListener("click", function(){
    menu.classList.remove("active");
});