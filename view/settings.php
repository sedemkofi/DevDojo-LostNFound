<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Website Name</title>
    <link rel="stylesheet" type="text/css" href="css/settings.css">

</head>
<body>
    <div class="content">
        <div class="header">
            <div class="user-actions">
                <div class="dropdown">
                    <button class="show-sidebar-button">
                        <img src="/images/logo.png" alt="Logo" class="lost-logo"> 
                    </button>
                    <div class="dropdown-content">
                        <a href="homepage.html">Home</a>
                        <a href="missing-items.html">Missing Items</a>
                        <a href="contact.html">Contact Us</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    
    <h1>Settings</h1>
    <hr>
    <h2>Account Information</h2>
    <p>Name</p>
    <input type="text" value="Temp User">
    <p>Email</p>
    <input type="text" value="user@email.com">
    <p>Phone Number</p>
    <input type="text" value="+233 23 456 789">
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
    <button class="log-out-button" id="log-out">Log Out</button>
    <button class="delete-account-btn" id="delete-account">Delete Account</button>
    <!-- Add security settings options here -->
    
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
<script>
    //get reference to the elements in the dom
    const changePasswordButton = document.getElementById('change-password-button');
    const confirmPasswordContainer = document.getElementById('confirm-password-container');
    const cancelChange = document.getElementById('cancel-button');
    const passwordInput = document.getElementById( 'password-input');
    const confirmPasswordInput = document.getElementById("confirm-password-input");
    const logOut = document.getElementById('log-out');

    //add event listener to logout button to redirect to the sign in page
    logOut.addEventListener('click', ()=> {
        window.location.href = 'signin.html';
    })

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