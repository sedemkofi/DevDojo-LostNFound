<?php

include '../settings/connection.php';
include '../functions/item_fxn.php';
<<<<<<< HEAD

if(!isset($_SESSION['user'])) {
    header("Location: signin.php");
  } 
if ($_SESSION['user']['RoleID'] != 1) {
    header("Location: ../view/homepage.php");
}

if (isset($_GET['error']) && $_GET['error'] == "failed_to_add_item") {
    echo "<script>alert('Failed to add item')</script>";
} else if (isset($_GET['error']) && $_GET['error'] == "failed_to_delete_item") {
    echo "<script>alert('Failed to delete item')</script>";
} else if (isset($_GET['error']) && $_GET['error'] == "failed_to_update_item") {
    echo "<script>alert('Failed to update item')</script>";
} 
=======
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
<<<<<<< HEAD
                        <a href="admin-missing-items.php">Missing Items</a>
                        <a href="admin-view-requests.php">Manage Requests</a>
                        <a href="admin-manage-admins.php">View Admins</a>
                        <a href="admin-settings.php">Settings</a>  
=======
                        <a href="admin-manage-admins.php">View Admins</a>
                        <a href="../view/settings.php">Settings</a>  
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
                    </div>
                </div>
            </div>
        </div>
        <h2 >Items</h2> 
        

        <div class="container">
            <table>
                <tr>
                    <th width="150px">Item Name</th>
                    <th width="150px">Date Found</th>
                    <th width="150px">Date Added</th>
                    <th width="150px">Location</th>
                    <th width="150px">Status</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
                <tr>
                    <?php 
                    displayItems($items);
                ?>
            </table>
        </div>
        <button id="addItemButton">Add Item</button><br><br>
        <br>
    <form action="../actions/add_item.php" method="post" name="addItem" id="addItem" enctype="multipart/form-data">
        <label for="itemName">Item Name</label><br><br>
        <input type="text" id="itemName" name="itemName" placeholder="Enter item name" required>        
        <br><br>
        <label for="last-seen-location">Last Seen Location</label><br><br>
        <input type="text" name="location" id="location" placeholder="Enter a Location"><br><br>
        <label for="last-seen-location">Last Seen Date</label><br><br>
        <input type="date" name="dateSeen" id="dateSeen"><br><br>
        <label for="picture" id="picture-label">Upload Image</label>
        <input type="file" id="picture" name="picture" accept="image/*" required><br><br>
        <button type="submit" value="submit" name="addItemSubmit" id="addItemSubmit">Create</button>
        <button id="cancelAddItem"">Cancel</button>
    </form> 
    <script src="../js/admin.js"></script>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelector('.loader_bg').style.display = 'none';
            }, 600);  
        });
    </script>
    </div>
    
</body>