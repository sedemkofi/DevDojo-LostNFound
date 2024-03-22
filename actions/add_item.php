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
<<<<<<< HEAD

        // Check if the file is an image
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $picture['tmp_name']);
        if (strpos($mime, 'image/') !== 0) {
            echo "Sorry, only image files are allowed.";
            exit;
        }

        move_uploaded_file($picture["tmp_name"], $target_file);

        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO Item (ItemName, LocationFound, DateFound, DateUploaded, ImageSource) VALUES (?, ?, ?, NOW(),?)");

        // Bind parameters
        $stmt->bind_param("ssss", $itemName, $location, $dateSeen, $target_file);
=======
        move_uploaded_file($picture["tmp_name"], $target_file);

        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO Item (ItemName, LocationFound, DateFound, DateUploaded, ImageSource) VALUES (?, ?, ?, NOW(),?)" );


        // Bind parameters
        $stmt->bind_param("ssss", $itemName, $location, $dateSeen,$target_file);
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1

        // Execute the statement
        if ($stmt->execute()) {
            echo "New item added successfully";
            header("Location: ../admin/admin-manage-items.php");
        } else {
<<<<<<< HEAD
            header("Location: ../admin/admin-manage-items.php?error=failed_to_add_item");
=======
            echo "Error: " . $stmt->error;
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$conn->close();
?>