<?php

$con = new mysqli('localhost', 'root', '', 'LFS2024');
// Check if the connection was successful

if ($con->connect_error) {
    echo "Failed to connect";
    exit();
}
?>