<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "LFS2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch items from the database
$query = "SELECT * FROM Item";
$result = $conn->query($query);

// Format the data
if ($result->num_rows > 0) {
    // Start an unordered list
    echo "<ul>";

    // Loop through items and display each one
    while ($row = $result->fetch_assoc()) {
        // Format item details
        echo "<li>";
        echo "Item Name: " . $row['ItemName'] . "<br>";
        echo "Description: " . $row['Description'] . "<br>";
        // Add more details as needed
        echo "</li>";
    }

    // Close the unordered list
    echo "</ul>";
} else {
    // If there are no items, display a message
    echo "No items found.";
}

// Close database connection
$conn->close();
?>
