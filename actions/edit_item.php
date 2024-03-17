<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $userID = $_SESSION['user_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

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
        header("Location: ../view/missing-items.php");
        exit();
    } else {
        header("Location: ../view/missing-items.php");
        exit();
    }
}
?>
