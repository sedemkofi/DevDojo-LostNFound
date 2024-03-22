<?php
    require '../settings/core.php';
  if(!isset($_SESSION['user'])) {
    header("Location: signin.php?error=no-user-signed-in");
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" href="../css/contact-us.css">
<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
<<<<<<< HEAD
<link rel="stylesheet" href="../css/loading.css">
=======
<link rel="stylesheet" href="../css/contact-us.css">
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
                    <a href="settings.php">Settings</a>
                  </div>
            </div>                
        </div>
    </div>
  </div>
  <div>
    <div>
      <h3>Contact Us</h3>
      <p><span>&#x1F4CD;</span><strong>Ashesi University</strong></p>
      <p><span>&#x260E;</span><strong>    +233 908 678 456</strong></p>
      <p><span>&#x2709;</span><strong>    lostandfound@gmail.com</strong></p>
    </div>
  
  <div>
    <div>
        <h2>Get in Touch</h2>
        <p>We will get back to you as soon as we can!</p>
        <form action="homepage.php" method="post">
          <input style="border-radius: 5px; width: 200px; height:30px; text-indent: 4px;" type="text" id="name" placeholder="Name" required><br><br>
          <input style="border-radius: 5px; width: 200px; height:30px; text-indent: 4px;" type="email" id="email" placeholder="Email" required>
          <p id="message-head">Message</p>
          <textarea id="message" placeholder="Type a message" maxlength="4000" style="border-radius: 5px;font-size: 15px; color: black; text-align:left; text-indent: 4px; width:300px; height: 100px"></textarea>        
          <button id="send-message" type="submit">Send</button>
      </form>
    </div>
  </div>

</body>

<script>
  window.addEventListener('load', function() {
    setTimeout(function() {
        document.querySelector('.loader_bg').style.display = 'none';
    }, 1500); 
    });
</script>
</html>
