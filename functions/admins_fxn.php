<?php
require '../settings/connection.php';
require '../actions/get_all_admins.php';
function displayAdmins($admins) {
    foreach ($admins as $admin) {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $admin['UserID'] . "</td>";
        echo "<td style='text-align: center;'>" . $admin['FirstName'] . " " . $admin['LastName'] . "</td>";
        echo "<td style='text-align: center;'>" . $admin['Email'] . "</td>";
        echo "<td style='text-align: center;'><button style='height: 20px; width: 80px; margin-right:5px' class='editAdminButton' id='editAdminButton'>Edit</button><button style='height: 20px; width: 80px;' class='deleteAdminButton' id='deleteAdminButton'>Remove</button></td>";
        ;
        echo "</tr>";
    }
}

?>