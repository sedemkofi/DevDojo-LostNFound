<?php
    include '../settings/connection.php';
    include '../settings/core.php';

    $query = "SELECT Claim_Requests.RequestID, Item.ItemName, CONCAT(User.FirstName, ' ', User.LastName) AS UserName, User.Email, ItemState.StateName 
            FROM Claim_Requests 
            INNER JOIN Item ON Claim_Requests.ItemID = Item.ItemID 
            INNER JOIN User ON Claim_Requests.UserID = User.UserID 
            INNER JOIN ItemState ON Claim_Requests.StateID = ItemState.StateID";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $requests;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    $conn->close();
?>