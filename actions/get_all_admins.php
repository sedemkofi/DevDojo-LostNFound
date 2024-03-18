<?php
    include '../settings/connection.php';
    include '../settings/core.php';
    $query = "SELECT * FROM User";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $admins = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $admins;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    
    $stmt->close();
    $conn->close();
?>
