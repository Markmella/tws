/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
var menu = document.querySelector(".menu-list");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");
var dashboardBtn = document.getElementById("dashboard");
var profileBtn = document.getElementById("profile");
menuBtn.addEventListener("click", function () {
  menu.classList.add("active");
});
closeBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
dashboardBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
profileBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
/******/ })()
;