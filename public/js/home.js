/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
var menu = document.querySelector(".menu-list");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");
var homeBtn = document.getElementById("home");
var aboutBtn = document.getElementById("about");
var disclaimerBtn = document.getElementById("disclaimer");
var contactBtn = document.getElementById("contact");
menuBtn.addEventListener("click", function () {
  menu.classList.add("active");
});
closeBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
homeBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
aboutBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
disclaimerBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
contactBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
var searchBar = document.getElementById("search-bar");
var rows = document.querySelectorAll(".topic a");
searchBar.addEventListener('keyup', filterInput);

function filterInput() {
  var searchInput = document.getElementById("search-bar").value.toUpperCase();
  var topicContainer = document.querySelectorAll(".topic");
  console.log(searchInput);

  for (var i = 0; i < rows.length; i++) {
    var inputs = rows[i].innerHTML;

    if (inputs.toUpperCase().indexOf(searchInput) > -1) {
      topicContainer[i].style.display = "block";
    } else {
      topicContainer[i].style.display = "none";
    }
  }
}
/******/ })()
;