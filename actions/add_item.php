<?php
require '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addItemSubmit'])) {
        $itemName = $_POST['itemName'];
        $location = $_POST['location'];
        $dateSeen = $_POST['dateSeen'];

        // Handle the uploaded file
        $picture = $_FILES['picture'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($picture["name"]);
        move_uploaded_file($picture["tmp_name"], $target_file);

        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO Item (ItemName, LocationFound, DateFound, DateUploaded, ImageSource) VALUES (?, ?, ?, NOW(),?)" );


        // Bind parameters
        $stmt->bind_param("ssss", $itemName, $location, $dateSeen,$target_file);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New item added successfully";
            header("Location: ../admin/admin-manage-items.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$conn->close();
?>