
<?php
require '../settings/connection.php';
require '../settings/core.php';    
<<<<<<< HEAD
if(!isset($_SESSION['user'])) {
    header("Location: signin.php");
  } 
=======

>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Website Name</title>
    <link rel="stylesheet" type="text/css" href="../css/settings.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="../css/loading.css">
=======

>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
</head>
<body>
<div class="loader_bg">
    <div class="loader"><img src="../images/loading.gif" alt="#" /><br><p>Loading</p></div>
</div>
    <div class="content">
        <div class="header">
            <div class="user-actions">
                <div class="dropdown">
                    <button class="show-sidebar-button">
                        <img src="../images/logo.png" alt="Logo" class="lost-logo"> 
                    </button>
                    <div class="dropdown-content">
                        <a href="homepage.php">Home</a>
                        <a href="missing-items.php">Missing Items</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    
    <h1>Settings</h1>
    <hr>
    <h2>Account Information</h2>
    <p>Name</p>
    <input type="text" value="<?php 

    echo $_SESSION['user']['FirstName'] . " " . $_SESSION['user']['LastName']; 
    
    ?>" disabled>
    <p>Email</p>
    <input type="text" style="width: 300px;" value="<?php 
    echo $_SESSION['user']['Email']; ?>" disabled><br>
    <h2>Security Settings</h2>
    <div id="password-container">
        <p>Password</p>
        <input type="password" id="password-input" value="**********">
        <button class="change-password-btn" id="change-password-button">Change Password</button>
      </div>
      <div id="confirm-password-container" style="display:none;">
        <p>Confirm Password</p>
        <input type="password" id="confirm-password-input">
        <button id="confirm-button">Confirm</button>
        <button id = "cancel-button">Cancel</button>
      </div>
    <br><br>
    <hr>
    <br>
    <form action="../actions/logout_user.php">
        <button class="log-out-button" id="log-out">Log Out</button>
    </form><br>
    <button class="delete-account-btn" id="delete-account">Delete Account</button>
   
    
   
</body>
</html>
<script>
    window.addEventListener('load', function() {
    setTimeout(function() {
        document.querySelector('.loader_bg').style.display = 'none';
    }, 800); 
    });
    //get reference to the elements in the dom
    const changePasswordButton = document.getElementById('change-password-button');
    const confirmPasswordContainer = document.getElementById('confirm-password-container');
    const cancelChange = document.getElementById('cancel-button');
    const passwordInput = document.getElementById( 'password-input');
    const confirmPasswordInput = document.getElementById("confirm-password-input");
    const logOut = document.getElementById('log-out');

    
    //add event listener to cancel button to undo changes on password
    cancelChange.addEventListener('click', () => {
        changePasswordButton.style.display = '';
        confirmPasswordContainer.style.display = 'none';
        passwordInput.value = '**********'; //reset password input field
    })
    //Add event listener to change password button to display confirm password
    changePasswordButton.addEventListener('click', () => {
    confirmPasswordContainer.style.display = 'block';
    changePasswordButton.style.display = 'none';
    });
</script>
