<?php
    include '../settings/connection.php';
    include '../settings/core.php';

    $query = "SELECT * FROM Item"; // Assuming your table name is 'Items'
    $result = mysqli_query($conn, $query);

    if ($result) {
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $items;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    $conn->close();
?>