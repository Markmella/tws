/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/admin/adminLogin.js ***!
  \******************************************/
var btnAdminLogin = document.getElementById('admin_login');
btnAdminLogin.addEventListener('click', function () {
  Swal.fire({
    width: 250,
    title: 'Checking...',
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    admin_login_form.submit();
  });
});
var emailField = document.getElementById('username');
var passwordField = document.getElementById('password');
var error1 = document.getElementById('error1');
var error2 = document.getElementById('error2');
emailField.addEventListener('keyup', function () {
  var input = emailField.value;

  if (input.length !== 0) {
    error1.style.display = "none";
    emailField.style.border = "1px solid #444";
  } else {
    error1.style.display = "block";
    emailField.style.border = "1px solid red";
  }
});
passwordField.addEventListener('keyup', function () {
  var input = passwordField.value;

  if (input.length !== 0) {
    error2.style.display = "none";
    passwordField.style.border = "1px solid #444";
  } else {
    error2.style.display = "block";
    passwordField.style.border = "1px solid red";
  }
});
var showPassword = document.getElementById("show-password");
var hidePassword = document.getElementById("hide-password");
var password = document.getElementById("password");
showPassword.addEventListener("click", function () {
  if (password.type === "password") {
    password.setAttribute("type", "text");
    showPassword.style.display = "none";
    hidePassword.style.display = "block";
  }
});
hidePassword.addEventListener("click", function () {
  if (password.type === "text") {
    password.setAttribute("type", "password");
    hidePassword.style.display = "none";
    showPassword.style.display = "block";
  }
});
/******/ })()
;