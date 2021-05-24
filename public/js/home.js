/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
var searchBar = document.getElementById("search-bar");
var rows = document.querySelectorAll(".topic a");
searchBar.addEventListener('keyup', function () {
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
});
var link = document.getElementById("source");
var btnCopy = document.getElementById("copy");
btnCopy.addEventListener('click', function () {
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
/******/ })()
;