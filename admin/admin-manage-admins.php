<!DOCTYPE html>
<html>
<head>
    <title>Manage Administrators</title>
    <link rel="stylesheet" type="text/css" href="../css/admin-page.css">
</head>
<body>
    <div class="content">
        <div class="header">
            <div class="user-actions">
                <div class="dropdown">
                    <button class="show-sidebar-button">
                        <img src="../images/logo.png" alt="Logo" class="lost-logo"> 
                    </button>
                    <div class="dropdown-content">
                        <a href="admin-manage-items.html">Home</a>
                        <a href="../settings.html">Settings</a>  
                    </div>
                </div>
            </div>
        </div>
    <h2>Administrators</h2>
    <table>
        <thead>
            <tr>
                <th width="150px">Admin ID</th>
                <th width="150px">Username</th>
                <th width="150px">Email</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <button id="addAdminButton">Add Admin</button><br><br>
    <div id="addAdmin">
        <h3>Users</h3>
        <button type="submit" value="submit" name="addAdminSubmit" id="addAdminSubmit">Make Admin</button>
        <button id="cancelAddAdmin">Cancel</button>

    </div>
    <script src="../js/manage-admins.js"></script>
    </body>

</html>