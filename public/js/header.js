/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/header.js ***!
  \********************************/
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
/******/ })()
;