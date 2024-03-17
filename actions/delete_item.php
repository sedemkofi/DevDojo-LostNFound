<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $userID = $_SESSION['user_id'];

    // Database connection
    $con = new mysqli('localhost', 'root', '', 'LFS2024');
    if ($con->connect_error) {
        echo "Failed to connect";
        exit();
    }

    // Prepare and execute query to delete user
    $query = "DELETE FROM User WHERE UserID=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $userID);
    $stmt->execute();

    // Check if user was successfully deleted
    if ($stmt->affected_rows == 1) {
        // Log out user after deletion
        session_destroy();
        header('Location: ../view/signup.php');
        exit();
    } else {
        header('Location: ../view/homepage.php');
        exit();
    }
}
?>
