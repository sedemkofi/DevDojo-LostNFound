<?php
session_start();
require '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['setClaimedSubmit'])) {
        $itemId = $_POST['itemId'];

<<<<<<< HEAD

        // Prepare and execute query to update user details
        $query = "UPDATE Item SET StatusID=2 WHERE ItemID=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $itemID);
        $stmt->execute();
        if ($stmt->execute()) {
            header("Location: ../view/missing-items.php?message=request-processed");
        } else {
            header("Location: ../view/missing-items.php?error=claim-failed");
        }
=======
    // Database connection
    $con = new mysqli('localhost', 'root', '', 'LFS2024');
    if ($con->connect_error) {
        echo "Failed to connect";
        exit();
    }

    // Prepare and execute query to update user details
    $query = "UPDATE User SET FirstName=?, LastName=?, Email=? WHERE UserID=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssi", $firstname, $lastname, $email, $userID);
    $stmt->execute();

    // Check if user details were successfully updated
    if ($stmt->affected_rows == 1) {
        header("Location: ../admin/admin-manage-items.php");
        exit();
    } else {
        header("Location: ../view/missing-items.php");
        exit();
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
    }
    
}
?>
