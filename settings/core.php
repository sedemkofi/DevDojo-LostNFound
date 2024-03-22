<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['user'])) {
    header('Location: ../view/signin.php');
    die();
}
else{
    return;
}

?>
