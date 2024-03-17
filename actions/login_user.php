<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    // Check if email is valid
    if (!$email) {
        header('Location: ../view/signin.php');
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
    $query = "SELECT * FROM User WHERE Email=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and verify password
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Password'])) {
            // Password is correct, set session variables and redirect to homepage
            $_SESSION['user_id'] = $row['UserID'];
            header('Location: ../view/homepage.php');
            exit();
        }
    }

    // Invalid credentials, redirect back to signin.php
    header('Location: ../view/signin.php');
    exit();
}
?>

