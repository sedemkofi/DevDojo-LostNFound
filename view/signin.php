
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In</title>
<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/sign-in.css">
</head>
<body>
<br>
<div class="login-type-link">
  <a href="admin/admin-sign-in.html">admin</a>
</div>
<div class="header">DevDojo</div>
  <div class="signin-container">
    <h2>Sign In</h2>
    <form class="signin-form">
      <div class="input-group">
        <input type="email" id="email" placeholder="Email Address" required>
      </div>
      <div class="input-group">
        <input type="password" id="password" placeholder="Password" required>
      </div>
      <button class="button" id="sign-in-button" onclick="">Sign In</button>
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
    <span>Don’t have account? <a href="signup.html">Sign up</a></span>
  </div>
</div>

<script>
  // Selecting the login button and input fields by their IDs
    const loginButton = document.querySelector('#sign-in-button');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');

    loginButton.addEventListener('click', () => {
      event.preventDefault(); // Preventing the default form submission behavior
      // Checking if both email and password fields are not empty
        if (emailInput.value !== '' && passwordInput.value !== '') {
        window.location.href = 'homepage.html';  // Redirecting to the homepage if login credentials are valid
      }else{
        alert('Enter your username and password to Sign in')    // Displaying an alert if either email or password is empty
      }
});
</script>

</body>
</html>