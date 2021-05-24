/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/auth/register.js ***!
  \***************************************/
var nameField = document.getElementById('name');
var usernameField = document.getElementById('username');
var emailField = document.getElementById('email');
var password1Field = document.getElementById('password1');
var password2Field = document.getElementById('password2');
var error1 = document.getElementById('error1');
var error2 = document.getElementById('error2');
var error3 = document.getElementById('error3');
var error4 = document.getElementById('error4');
nameField.addEventListener('keyup', function () {
  var input = document.getElementById('name').value;

  if (input.length !== 0) {
    error1.style.display = "none";
    nameField.style.border = "1px solid #444";
  } else {
    error1.style.display = "block";
    nameField.style.border = "1px solid #444";
  }
});
usernameField.addEventListener('keyup', function () {
  var input = document.getElementById('username').value;

  if (input.length !== 0) {
    error2.style.display = "none";
    usernameField.style.border = "1px solid #444";
  } else {
    error2.style.display = "block";
    usernameField.style.border = "1px solid #444";
  }
});
emailField.addEventListener('keyup', function () {
  var input = document.getElementById('email').value;

  if (input.length !== 0) {
    error3.style.display = "none";
    emailField.style.border = "1px solid #444";
  } else {
    error3.style.display = "block";
    emailField.style.border = "1px solid #444";
  }
});
password1Field.addEventListener('keyup', function () {
  var input = document.getElementById('password1').value;

  if (input.length !== 0) {
    password1Field.style.border = "1px solid #444";
  } else {
    password1Field.style.border = "1px solid #444";
  }
});
password2Field.addEventListener('keyup', function () {
  var input = document.getElementById('password2').value;

  if (input.length !== 0) {
    error4.style.display = "none";
    password2Field.style.border = "1px solid #444";
  } else {
    error4.style.display = "block";
    password2Field.style.border = "1px solid #444";
  }
});
var showPassword = document.getElementById("show-password");
var hidePassword = document.getElementById("hide-password");
var password1 = document.getElementById("password1");
var password2 = document.getElementById("password2");
showPassword.addEventListener("click", function () {
  if (password1.type === "password" || password2.type === "password") {
    password1.setAttribute("type", "text");
    password2.setAttribute("type", "text");
    showPassword.style.display = "none";
    hidePassword.style.display = "block";
  }
});
hidePassword.addEventListener("click", function () {
  if (password1.type === "text" || password2.type === "text") {
    password1.setAttribute("type", "password");
    password2.setAttribute("type", "password");
    hidePassword.style.display = "none";
    showPassword.style.display = "block";
  }
});
/******/ })()
;