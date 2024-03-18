<?php

<<<<<<< HEAD
$SERVER="localhost";
    $USERNAME = "root"; 
    $PASSWORD= "";
    $DB_NAME ="lfs2024";
=======
$con = new mysqli('localhost', 'root', '', 'LFS2024');
// Check if the connection was successful
>>>>>>> 8498b4299de56071b536b43deca1d543d17d19d0

    $conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>