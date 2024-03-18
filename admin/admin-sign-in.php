

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
<div class="login-type-link">
    <a href="../view/signin.php">user login</a>
</div>
<br>
<div class="header">DevDojo</div>
  <div class="signin-container">
    <h2>Administrator</h2>
    <form class="signin-form" action="../actions/login_admin.php" method="post" name="loginForm" onsubmit="return validateForm()">
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
</div>

</body>
</html>
