/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/user/profile.js ***!
  \**************************************/
var changeInformationBtn = document.getElementById("change-information-button");
var informationBtn = document.querySelector(".information-button");
var changePasswordBtn = document.getElementById("change-password-button");
var changePasswordCon = document.querySelector(".password-container"); // For change information container

var fullnameField = document.getElementById("fullname");
var usernameField = document.getElementById("username");
var emailField = document.getElementById("email");
changeInformationBtn.addEventListener('click', function () {
  fullnameField.disabled = false;
  usernameField.disabled = false;
  emailField.disabled = false;
  fullnameField.style.borderBottom = "2px solid #444";
  usernameField.style.borderBottom = "2px solid #444";
  emailField.style.borderBottom = "2px solid #444";
  informationBtn.style.display = "flex";
  changeInformationBtn.style.display = "none";
  changePasswordBtn.style.display = "none";
});
var btnCancelInfo = document.getElementById("cancel-info");
btnCancelInfo.addEventListener('click', function (e) {
  e.preventDefault();
  fullnameField.disabled = true;
  usernameField.disabled = true;
  emailField.disabled = true;
  fullnameField.style.borderBottom = "none";
  usernameField.style.borderBottom = "none";
  emailField.style.borderBottom = "none";
  informationBtn.style.display = "none";
  changePasswordCon.style.display = "none";
  changeInformationBtn.style.display = "flex";
  changePasswordBtn.style.display = "flex";
}); // For change information container
// For change password container

var savePasswordContainer = document.querySelector(".btn-save-password");
var passwordInput = savePasswordContainer.querySelectorAll("input[type='password']");
changePasswordBtn.addEventListener('click', function () {
  changePasswordCon.style.display = "flex";
  changePasswordBtn.style.display = "none";
  changeInformationBtn.style.display = "none";
  passwordInput[0].value = "";
  passwordInput[1].value = "";
  passwordInput[2].value = "";
});
var btnCancelPassword = document.getElementById("cancel-button");
var errorPassword = document.querySelector(".error-password");
btnCancelPassword.addEventListener('click', function (e) {
  e.preventDefault();
  errorPassword.style.display = "none";
  changePasswordCon.style.display = "none";
  changePasswordBtn.style.display = "flex";
  changeInformationBtn.style.display = "flex";
}); // For change password container
// For change password input

var currentPasswordField = document.getElementById('current');
var password1Field = document.getElementById('password1');
var password2Field = document.getElementById('password2');
var error = document.getElementById('error');

function currentPasswordInput() {
  var input = currentPasswordField.value;

  if (input.length !== 0) {
    currentPasswordField.style.border = "1px solid #444";
  } else {
    currentPasswordField.style.border = "1px solid red";
  }
}

function password1Input() {
  var input = password1Field.value;

  if (input.length !== 0) {
    password1Field.style.border = "1px solid #444";
  } else {
    password1Field.style.border = "1px solid red";
  }
}

function password2Input() {
  var input = password2Field.value;

  if (input.length !== 0) {
    error.style.display = "none";
    password2Field.style.border = "1px solid #444";
  } else {
    error.style.display = "block";
    password2Field.style.border = "1px solid red";
  }
} // For change password input
// For Showing Password


var showPassword = document.getElementById("show-password");
var hidePassword = document.getElementById("hide-password");
var current = document.getElementById("current");
var password1 = document.getElementById("password1");
var password2 = document.getElementById("password2");
showPassword.addEventListener("click", function () {
  if (current.type === "password" || password1.type === "password" || password2.type === "password") {
    current.setAttribute("type", "text");
    password1.setAttribute("type", "text");
    password2.setAttribute("type", "text");
    showPassword.style.display = "none";
    hidePassword.style.display = "block";
  }
});
hidePassword.addEventListener("click", function () {
  if (current.type === "text" || password1.type === "text" || password2.type === "text") {
    current.setAttribute("type", "password");
    password1.setAttribute("type", "password");
    password2.setAttribute("type", "password");
    hidePassword.style.display = "none";
    showPassword.style.display = "block";
  }
}); // For Showing Password
// For camera icon

var btnCamera = document.querySelector(".camera");
var errorMessage = document.querySelector(".error-message");
var profileCon = document.querySelector(".profile-container");
var changePictureCon = document.querySelector(".change-picture-container");
var btnExit = document.querySelector(".exit");
btnCamera.addEventListener('click', function () {
  changePasswordBtn.disabled = true;
  changePictureCon.style.display = "block";
  profileCon.style.opacity = ".2";
});
btnExit.addEventListener('click', function () {
  changePasswordBtn.disabled = false;
  errorMessage.style.display = "none";
  changePictureCon.style.display = "none";
  profileCon.style.opacity = "1";
  location.reload();
}); // For camera icon
// For change profile container

var btnChangeProfile = document.querySelector(".btn-change-profile");
var btnSaveProfile = document.querySelector(".btn-save-profile");
var btnCancel = document.getElementById("cancel");
var preview = document.getElementById("file");
preview.addEventListener('click', function () {
  preview.addEventListener('change', function (event) {
    showPreview(event);
  });
});

function showPreview(event) {
  if (event.target.files.length > 0) {
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("profile-prev");
    preview.src = src;
    btnChangeProfile.style.display = "none";
    btnSaveProfile.style.display = "flex";
  }
}

btnCancel.addEventListener('click', function (e) {
  e.preventDefault();
  errorMessage.style.display = "none";
  btnSaveProfile.style.display = "none";
  btnChangeProfile.style.display = "flex";
}); // For change profile container
// Display profile picture

var profilePicture = document.getElementById("profile-picture");
var source = document.getElementById("profile-picture").src;
profilePicture.addEventListener('click', function () {
  Swal.fire({
    imageUrl: source,
    showConfirmButton: false,
    width: '450'
  });
}); // Display profile picture
// Delete Account

var btnDelete = document.getElementById('delete');
btnDelete.addEventListener('click', function () {
  Swal.fire({
    width: 300,
    title: 'Deleting Account...',
    timer: 3000,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    delete_form.submit();
  });
}); // Delete Account
/******/ })()
;