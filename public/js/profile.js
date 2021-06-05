/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/user/profile.js ***!
  \**************************************/
var changeInformationBtn = document.getElementById("change-information-button");
var saveInformationContainer = document.querySelector(".save-information");
var changePasswordBtn = document.getElementById("change-password-button");
var changePasswordCon = document.querySelector(".password-container"); // For change information container

var fullnameField = document.getElementById("fullname");
var usernameField = document.getElementById("username");
var emailField = document.getElementById("email");
var error1 = document.getElementById("error1");
var error2 = document.getElementById("error2");
changeInformationBtn.addEventListener('click', function () {
  fullnameField.disabled = false;
  usernameField.disabled = false;
  emailField.disabled = false;
  fullnameField.style.borderBottom = "2px solid #444";
  usernameField.style.borderBottom = "2px solid #444";
  emailField.style.borderBottom = "2px solid #444";
  saveInformationContainer.style.display = "flex";
  changeInformationBtn.style.display = "none";
  changePasswordBtn.style.display = "none";
  error1.style.display = "none";
  error2.style.display = "none";
});
var btnCancelInformation = document.getElementById("cancel-information");
btnCancelInformation.addEventListener('click', function (e) {
  e.preventDefault();
  Swal.fire({
    width: 150,
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    location.reload();
  });
}); // For change information container
// For saving information button

var btnSavingInformation = document.getElementById('saving-information');
btnSavingInformation.addEventListener('click', function () {
  Swal.fire({
    width: 250,
    title: 'Checking...',
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    information_form.submit();
  });
}); // For saving information button
// For change password container

var savePasswordContainer = document.querySelector(".btn-save-password");
changePasswordBtn.addEventListener('click', function () {
  changePasswordCon.style.display = "flex";
  changePasswordBtn.style.display = "none";
  changeInformationBtn.style.display = "none";
});
var btnCancelPassword = document.getElementById("cancel-password");
btnCancelPassword.addEventListener('click', function (e) {
  e.preventDefault();
  Swal.fire({
    width: 150,
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    location.reload();
  });
}); // For change password container
// For saving password button

var btnSavingPassword = document.getElementById('saving-password');
btnSavingPassword.addEventListener('click', function () {
  Swal.fire({
    width: 250,
    title: 'Checking...',
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    password_form.submit();
  });
}); // For saving information button
// For change password input

var currentPasswordField = document.getElementById('current');
var password1Field = document.getElementById('password1');
var password2Field = document.getElementById('password2');
var error = document.getElementById('error');
currentPasswordField.addEventListener('keyup', function () {
  var input = currentPasswordField.value;

  if (input.length !== 0) {
    error.style.display = "none";
    currentPasswordField.style.border = "1px solid #444";
  } else {
    error.style.display = "block";
    currentPasswordField.style.border = "1px solid red";
  }
});
password1Field.addEventListener('keyup', function () {
  var input = password1Field.value;

  if (input.length !== 0) {
    error.style.display = "none";
    password1Field.style.border = "1px solid #444";
  } else {
    error.style.display = "block";
    password1Field.style.border = "1px solid red";
  }
});
password2Field.addEventListener('keyup', function () {
  var input = password2Field.value;

  if (input.length !== 0) {
    error.style.display = "none";
    password2Field.style.border = "1px solid #444";
  } else {
    error.style.display = "block";
    password2Field.style.border = "1px solid red";
  }
}); // For change password input
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
  Swal.fire({
    width: 150,
    timer: 1500,
    didOpen: function didOpen() {
      Swal.showLoading();
    }
  }).then(function () {
    location.reload();
  });
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
    width: 320,
    title: 'Deleting My Account...',
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