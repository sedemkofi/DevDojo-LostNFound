<?php
require '../settings/connection.php';
require '../actions/get_all_items.php';
require '../actions/get_all_requests.php';

function displayItems($items) {
    foreach ($items as $item) {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $item['ItemName'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['DateFound'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['DateUploaded'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['LocationFound'] . "</td>";
<<<<<<< HEAD
        echo "<td style='text-align: center;'>" . $item['StatusName'] . "</td>";
        echo "<td style='text-align: center;'>
            
            <form action='../actions/delete_item.php' method='post' style='display:inline-block;'>
                <input type='hidden' name='itemId' id='itemId' value='".$item['ItemID']."'>
                <button class='fas fa-trash deleteItemButton' value='submit' type='submit' name='deleteItemSubmit' style='cursor:pointer; background-color: transparent; border-style:none; height: 50px;width:50px'></button>
=======
        echo "<td style='text-align: center;'>
            <button style='height: 20px; width: 80px; margin-right:5px' class='editItemButton' id='editItemButton'>Edit</button>
            <form action='deleteitem.php' method='post'>
                <input type='hidden' name='itemId' id='itemId' value='{$item['ItemID']}'>
                <button type='submit' name='deleteItemSubmit' style='height: 20px; width: 80px;' class='deleteItemButton' id='deleteItemButton'>Remove</button>
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
            </form>        
        </td>";
        echo "</tr>";
    }
}


function displayClaimRequests($requests) {
    foreach ($requests as $request) {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $request['ItemName'] . "</td>";
        echo "<td style='text-align: center;'>" . $request['UserName'] . "</td>";
        echo "<td style='text-align: center;'>" . $request['Email'] . "</td>";
        echo "<td style='text-align: center;'>" . $request['StateName'] . "</td>";
        echo "<td style='text-align: center;'>";
        
        echo "<form action='../actions/approve_request.php' method='post' style='display:inline-block;'>
        <input type='hidden' name='requestId' id='requestId' value='".$request['RequestID']."'>
        <button class='fas fa-check approveRequestButton' value='submit' type='submit' name='approveRequestSubmit' style='cursor:pointer; background-color: transparent; border-style:none; height: 50px;width:50px' ".($request['StateName'] == "Approved" ? "disabled" : "")."></button>
    </form>";

    echo "<form action='../actions/deny_request.php' method='post' style='display:inline-block;'>
        <input type='hidden' name='requestId' id='requestId' value='".$request['RequestID']."'>
        <button class='fas fa-times denyRequestButton' value='submit' type='submit' name='denyRequestSubmit' style='cursor:pointer; background-color: transparent; border-style:none; height: 50px;width:50px' ".($request['StateName'] == "Rejected" ? "disabled" : "")."></button>
    </form>";
        echo "</td>";
        echo "</tr>";
    }
}
?>