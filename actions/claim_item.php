<?php
    require '../settings/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['claimItemSubmit'])) {
            $itemId = $_POST['itemId'];
            $userID = $_POST['userId'];
            // Prepare an SQL statement
            $stmt = $conn->prepare("INSERT INTO Claim_Requests (ItemID, UserID) VALUES (?, ?)");
            
            $stmt->bind_param("ii", $itemId, $userID);
            if ($stmt->execute()) {
                header("Location: ../view/missing-items.php?message=request-processed");
            } else {
                header("Location: ../view/missing-items.php?error=claim-failed");
            }
        }


    }else {
        header("Location: ../view/missing-items.php?error=claim-failed");
    }

?>