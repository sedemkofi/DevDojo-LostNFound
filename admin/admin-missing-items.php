<?php
require '../settings/core.php';    

if(!isset($_SESSION['user'])) {
    header("Location: signin.php");
  } 
if ($_SESSION['user']['RoleID'] != 1) {
    header("Location: ../view/homepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/missing-item.css">
    <link rel="stylesheet" href="../css/loading.css">
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
                    <a href="admin-manage-items.php">Manage Items</a>
                    <a href="admin-view-requests.php">Manage Requests</a>
                    <a href="admin-manage-admins.php">View Admins</a>
                    <a href="admin-settings.php">Settings</a>                    
                </div>
            </div>
        </div>
    </div>
    <h1>Lost Items</h1>
    <div class="grid-container">

        <?php
            include '../settings/connection.php';

            $query = "SELECT * FROM Item WHERE StatusID = 1";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($items as $item) {
                    echo "<div class='grid-item' onclick='showClaimButton(\"claim-btn" . $item['ItemID'] . "\")' id='item" . $item['ItemID'] . "'>";
                    echo "<img src='" . $item['ImageSource'] . "' alt='item-image'>";
                    echo "<div class='item-info'>";
                    echo "<h3>" . $item['ItemName'] . "</h3>";
                    echo "<span class='last-seen'>" . $item['LocationFound'] . "</span>";
                    echo "</div>";
                    echo "<div class='person-name'>Date Found: " . $item['DateFound'] . "</div>";
                    echo "</div>";
                }
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

            $conn->close();
        ?>
    </div>
</body>
<script>
    window.addEventListener('load', function() {
    setTimeout(function() {
        document.querySelector('.loader_bg').style.display = 'none';
    }, 1000);  // 400 milliseconds = 1 seconds
    });
    // Selecting elements with IDs 'item1' and 'claim-btn1'
    const item1 = document.getElementById('item1');
    const claimbtn1 = document.getElementById('claim-btn1');

    // Getting all elements with class 'claim-btn'
    function showClaimButton(buttonName) { 
        const buttons = document.getElementsByClassName('claim-btn');  // Selecting all claim buttons by class name
        for (let i = 0; i < buttons.length; i++) {  // Looping through all claim buttons
            buttons[i].style.display = 'none';
        }
        // Selecting the specific claim button to show
        const button = document.getElementById(buttonName);
        if (button.style.display === 'none') {
            button.style.display = ''; 
        }else{
            //button.style.display = 'none';
        }
        
    }
</script>
