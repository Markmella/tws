/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/user/post.js ***!
  \***********************************/
var titleField = document.getElementById('title');
var authorField = document.getElementById('author');
var sourceField = document.getElementById('source');
var articleField = document.getElementById('article');
var error1 = document.getElementById('error1');
var error2 = document.getElementById('error2');
var error3 = document.getElementById('error3');
var error4 = document.getElementById('error4');
titleField.addEventListener('keyup', function () {
  var input = document.getElementById('title').value;

  if (input.length !== 0) {
    error1.style.display = "none";
    titleField.style.border = "1px solid #444";
  } else {
    error1.style.display = "block";
    titleField.style.border = "1px solid red";
  }
});
authorField.addEventListener('keyup', function () {
  var input = document.getElementById('author').value;

  if (input.length !== 0) {
    error2.style.display = "none";
    authorField.style.border = "1px solid #444";
  } else {
    error2.style.display = "block";
    authorField.style.border = "1px solid red";
  }
});
sourceField.addEventListener('keyup', function () {
  var input = document.getElementById('source').value;

  if (input.length !== 0) {
    error3.style.display = "none";
    sourceField.style.border = "1px solid #444";
  } else {
    error3.style.display = "block";
    sourceField.style.border = "1px solid red";
  }
});
articleField.addEventListener('keyup', function () {
  var input = document.getElementById('article').value;

  if (input.length !== 0) {
    error4.style.display = "none";
    articleField.style.border = "1px solid #444";
  } else {
    error4.style.display = "block";
    articleField.style.border = "1px solid red";
  }
});
/******/ })()
;