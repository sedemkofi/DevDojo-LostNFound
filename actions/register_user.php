<?php
session_start();
include "../settings/connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $firstname = trim($_POST['firstName']);
    $lastname = trim($_POST['lastName']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    // Check for empty field
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        header('Location: ../view/signup.php');
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database
    $con = new mysqli('localhost', 'root', '', 'LFS2024');

    if ($con->connect_error) {
        echo "Failed to connect";
        exit();
    }

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO User (FirstName, LastName, Email, Password, RoleID) VALUES (?, ?, ?, ?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssi", $firstname, $lastname, $email, $hashed_password, 3);

    if ($stmt->execute()) {
        // User successfully registered, redirect to login page
        header('Location: ../view/signin.php');
        exit();
    } else {
        // Error occurred during registration, redirect back to signup page
        header('Location: ../view/signup.php');
        exit();
    }
}
$stmt->close();
$con->close();
?>
