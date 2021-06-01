/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/admin/adminHeader.js ***!
  \*******************************************/
var menu = document.querySelector(".menu-list");
var menuBtn = document.querySelector(".menu-btn");
var closeBtn = document.querySelector(".close-btn");
var homeBtn = document.getElementById("home");
var dashboardBtn = document.getElementById("dashboard");
var adminBtn = document.getElementById("admin");
menuBtn.addEventListener("click", function () {
  menu.classList.add("active");
});
closeBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
homeBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
dashboardBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
adminBtn.addEventListener("click", function () {
  menu.classList.remove("active");
});
/******/ })()
;