<?php
    include '../settings/connection.php';
    include '../settings/core.php';

<<<<<<< HEAD
    $query = "SELECT Item.*, Status.StatusName FROM Item INNER JOIN Status ON Item.StatusID = Status.StatusID";
=======
    $query = "SELECT * FROM Item"; // Assuming your table name is 'Items'
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
    $result = mysqli_query($conn, $query);

    if ($result) {
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $items;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    $conn->close();
?>