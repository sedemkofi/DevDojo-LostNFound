<?php
require '../settings/connection.php';
require '../actions/get_all_items.php';

function displayItems($items) {
    foreach ($items as $item) {
        echo "<tr>";
        echo "<td style='text-align: center;'>" . $item['ItemName'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['DateFound'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['DateUploaded'] . "</td>";
        echo "<td style='text-align: center;'>" . $item['LocationFound'] . "</td>";
        echo "<td style='text-align: center;'>
            <button style='height: 20px; width: 80px; margin-right:5px' class='editItemButton' id='editItemButton'>Edit</button>
            <button style='height: 20px; width: 80px;' class='deleteItemButton' id='deleteItemButton'>Remove</button>
        </td>";
        echo "</tr>";
    }
}
?>