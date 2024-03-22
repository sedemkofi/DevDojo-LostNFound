<?php
require '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['deleteItemSubmit'])) {
        $itemId = $_POST['itemId'];

        // Prepare an SQL statement
        $stmt = $conn->prepare("DELETE FROM Item WHERE ItemID = ?");

        // Bind parameters
        $stmt->bind_param("i", $itemId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Item deleted successfully";
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