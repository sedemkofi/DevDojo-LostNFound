<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'wrong_password') {
        echo '<script>alert("Wrong password. You do not have access to this account")</script>';
    } elseif ($_GET['error'] == 'only_admins') {
        echo '<script>alert("This account is not an admin")</script>';
    } elseif ($_GET['error'] == 'wrong_email') {
        echo '<script>alert("Enter an Ashesi email address with an account")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/sign-in.css">
</head>
<body>
<br>
<div class="login-type-link">
  <a href="../admin/admin-sign-in.php">admin</a>
</div>
<div class="header">DevDojo</div>
  <div class="signin-container">
    <h2>Sign In</h2>
    <form class="signin-form" action="../actions/login_user.php" method="post" name="loginForm" onsubmit="return validateForm()">
      <div class="input-group">
        <input type="email" id="email" placeholder="Email Address" name="loginEmail" required>
      </div>
      <div class="input-group">
        <input type="password" id="password" placeholder="Password" name="loginPassword" required>
      </div>
      <button class="button" id="sign-in-button"  type="submit" name="loginSubmit">Sign In</button><br
    </form>
  
  <div class="forgot-password">
    <a href="#">forgot password?</a>
  </div>

  <div class="alternative">
    <div></div>
    <span class="or-text">OR</span>
    <div></div>
  </div>

  <div class="social-buttons">
    <a href="#" class="social-button" id="facebook">f</a>
    <a href="#" class="social-button" id="google">G</a>
    <a href="#" class="social-button" id="twitter">t</a>
  </div>

  <div class="signup-prompt">
    <span>Don’t have account? <a href="signup.php">Sign up</a></span>
  </div>
</div>
<script>
        function validateForm() {
            const loginEmail = document.getElementById('loginEmail').value;
            const loginPassword = document.getElementById('loginPassword').value;

            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (loginEmail === "" || !emailRegex.test(loginEmail)) {
                alert("Please enter a valid email address.");
                return false;
            }
            if (loginPassword === ""){
                alert("Please enter a password to continue.");
            }
            return true;
        }
    </script>
    <?php 
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']); // remove it after displaying the message
        }
    ?>

</body>
</html>
