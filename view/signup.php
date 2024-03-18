<?php
  include '../settings/connection.php';

  if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') {
    echo '<script>alert("Passwords do not match. Please confirm your password.")</script>';
  }
  if (isset($_GET['error']) && $_GET['error'] == 'email_in_use') {
    echo '<script>alert("This email is already in use. Please use a different email address.")</script>';
  }
  if (isset($_GET['error']) && $_GET['error'] == 'registration_failed') {
    echo '<script>alert("An error occurred during registration. Please try again.")</script>';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/signup.css">

</head>
<body>
<div class="header">DevDojo <br>
  <span style="font-size: 15px; color:#5cb85c">ashesi lost and found</span> 
</div>

<div class="signup-container">
  <h2>Create New Account</h2>
  <form action="../actions/register_user.php" method="post" id="signupForm">
    <div class="input-row">
      <div class="input-group">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>
      </div>
      <div class="input-group">
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>
      </div>
    </div>
    <div class="input-group input-large">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group input-large">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="input-group input-large">
      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
    </div>
    <span class="error" id="passwordError" style="color: red;"></span>
    <input type="checkbox" id="keepSignedIn" name="keepSignedIn">
      <label for="keepSignedIn">Keep me signed in</label>
    <input type="submit" value="Submit" name="Submit" id="submitButton" class="button" >
  </form>
  <div class="signin-link">
    <p>Already a member? <a href="signin.php">Login</a></p>
  </div>
</div>

</body>
<script src="../js/sign-up.js"></script>
</html>

