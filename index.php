<?php
session_start();
include ("helper/connect.php");
include ("helper/register.php")
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js
    "></script>
  <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css
    " rel="stylesheet">
</head>


<body>
  <?php


  if ($showAlert) {
    ?>
    <script>
      Swal.fire({
        title: "Successfully Registered",
        text: "Now you have an account of this portal",
        icon: "success"
      });
    </script>
    <?php

  } ?>

  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="helper/register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname">First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="username" id="email" autocomplete="new-email" placeholder="Email" required>
        <label for="email">Username</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" autocomplete="new-password" placeholder="Password"
          required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp" id="register">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="helper/register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="username" id="email" autocomplete="new-email" placeholder="Email" required>
        <label for="email">Username</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" autocomplete="new-password" placeholder="Password"
          required>
        <label for="password">Password</label>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>

</html>