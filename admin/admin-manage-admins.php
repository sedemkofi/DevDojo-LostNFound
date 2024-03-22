<?php
include '../settings/core.php';
include '../settings/connection.php';
require '../functions/admins_fxn.php';
<<<<<<< HEAD

if(!isset($_SESSION['user'])) {
    header("Location: signin.php");
  } 
if ($_SESSION['user']['RoleID'] != 1) {
    header("Location: ../view/homepage.php");
}
=======
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Administrators</title>
    <link rel="stylesheet" type="text/css" href="../css/admin-page.css">
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
                        <a href="admin-manage-items.php">Manage Items</a>
                        <a href="admin-view-requests.php">Manage Requests</a>
                        <a href="admin-settings.php">Settings</a>  
=======
                        <a href="admin-manage-items.php">Home</a>
                        <a href="../view/settings.php">Settings</a>  
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
                    </div>
                </div>
            </div>
        </div>
    <h2>Administrators</h2>
    <table>
        <thead>
            <tr>
                <th width="200px">ID</th>
                <th width="200px">Username</th>
                <th width="200px">Email</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    displayAdmins($admins);
                ?>
            </tr>
        </tbody>
    </table>
    <button id="addAdminButton">Add Admin</button><br><br>
    <div id="addAdmin">
        <h3>Users</h3>
        <button type="submit" value="submit" name="addAdminSubmit" id="addAdminSubmit">Make Admin</button>
        <button id="cancelAddAdmin">Cancel</button>

    </div>
    <script src="../js/manage-admins.js"></script>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.querySelector('.loader_bg').style.display = 'none';
            }, 1000);  // 1000 milliseconds = 1 seconds
        });
    </script>
    </body>

</html>