<?php
    session_start();
    session_destroy();

    header('Location: ../view/signin.php');
    exit();
?>

<?php
