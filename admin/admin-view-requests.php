<?php

include '../settings/connection.php';
include '../functions/item_fxn.php';

if(!isset($_SESSION['user'])) {
    header("Location: signin.php");
} 
if ($_SESSION['user']['RoleID'] != 1) {
    header("Location: ../view/homepage.php");
}

if (isset($_GET['error']) && $_GET['error'] == "failed_to_add_request") {
    echo "<script>alert('Failed to add request')</script>";
} else if (isset($_GET['error']) && $_GET['error'] == "failed_to_delete_request") {
    echo "<script>alert('Failed to delete request')</script>";
} else if (isset($_GET['error']) && $_GET['error'] == "failed_to_update_request") {
    echo "<script>alert('Failed to update request')</script>";
} 
if (isset($_GET['message']) && $_GET['message'] == "request-approved") {
    echo "<script>alert('Request has been approved')</script>";
}
if (isset($_GET['message']) && $_GET['message'] == "request-processed") {
    echo "<script>alert('Request is being processed')</script>";
}
if (isset($_GET['message']) && $_GET['message'] == "request-denied") {
    echo "<script>alert('Request has been rejected')</script>";
}
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
                        <a href="admin-missing-items.php">Missing Items</a>
                        <a href="admin-manage-items.php">Manage Items</a>                        
                        <a href="admin-manage-admins.php">View Admins</a>
                        <a href="admin-settings.php">Settings</a>  
                    </div>
                </div>
            </div>
        </div>
        <h2 >Claim Requests</h2> 

        <div class="container">
            <table>
                <tr>
                    <th width="150px">Item</th>
                    <th width="150px">Name</th>
                    <th width="150px">Email</th>
                    <th width="150px">Request Status</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
                <tr>
                    <?php 
                    displayClaimRequests($requests);
                    ?>
                </tr>
            </table>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelector('.loader_bg').style.display = 'none';
            }, 890);  
        });
    </script>
</body>
</html>