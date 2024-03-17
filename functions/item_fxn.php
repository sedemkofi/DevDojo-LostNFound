<?php
include '../settings/connection.php';
require '../actions/get_all_items.php';

function displayItems($items){
    foreach($items as $item){
        echo "<tr>";
        echo "<td>" . $item['ItemName'] . "</td>";
        echo "<td>" . $item['DateFound'] . "</td>";
        echo "<td>" . $item['DateUploaded'] . "</td>";
        echo "<td>
            <form action='../actions/edit_item_view.php' method='get'>
                <input type = 'hidden' name='id' value='" . $item['itemid'] . "'> 
            <button type='submit'>Edit</button>
            </form>
        </td>
        <td>
            <form action='../actions/delete_item_action.php' method='get'> 
            <input type='hidden' name='id' value='" . $item['itemid'] . "'>
            <button type='submit'>Delete</button>
            </form>
        </td>";
        echo "</tr>";
    }
}
?>