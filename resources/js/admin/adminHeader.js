    
const menu = document.querySelector(".menu-list");
const menuBtn = document.querySelector(".menu-btn");
const closeBtn = document.querySelector(".close-btn");

const homeBtn = document.getElementById("home");
const dashboardBtn = document.getElementById("dashboard");
const adminBtn = document.getElementById("admin");

menuBtn.addEventListener("click", function(){
menu.classList.add("active");
});

closeBtn.addEventListener("click", function(){
menu.classList.remove("active");
});

homeBtn.addEventListener("click", function(){
menu.classList.remove("active");
});

dashboardBtn.addEventListener("click", function(){
menu.classList.remove("active");
});

adminBtn.addEventListener("click", function(){
menu.classList.remove("active");
});
