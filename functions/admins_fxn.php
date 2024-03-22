<?php
require '../settings/connection.php';
require '../actions/get_all_admins.php';
<<<<<<< HEAD

=======
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
function displayAdmins($admins) {
    foreach ($admins as $admin) {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $admin['UserID'] . "</td>";
        echo "<td style='text-align: center;'>" . $admin['FirstName'] . " " . $admin['LastName'] . "</td>";
        echo "<td style='text-align: center;'>" . $admin['Email'] . "</td>";
<<<<<<< HEAD
        echo "<td style='text-align: center;'><i class='fas fa-pencil-alt editAdminButton' style='margin-right:20px; cursor:pointer;'></i><i class='fas fa-trash deleteAdminButton' style='cursor:pointer;'></i></td>";
        echo "</tr>";
    }
}
=======
        echo "<td style='text-align: center;'><button style='height: 20px; width: 80px; margin-right:5px' class='editAdminButton' id='editAdminButton'>Edit</button><button style='height: 20px; width: 80px;' class='deleteAdminButton' id='deleteAdminButton'>Remove</button></td>";
        ;
        echo "</tr>";
    }
}

>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
?>