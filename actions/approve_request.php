<?php
    require '../settings/connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if (isset($_POST['approveRequestSubmit'])) {
            
            $requestId = $_POST['requestId'];
            $stmt = $conn->prepare("UPDATE Claim_Requests SET StateID=2 WHERE RequestID=?");  // Approved status is ID 2
            // echo "$requestId";
            $stmt->bind_param("i", $requestId);

            if ($stmt->execute()) {
                // Fetch the ItemID associated with the RequestID
                $stmt = $conn->prepare("SELECT ItemID FROM Claim_Requests WHERE RequestID=?");
                $stmt->bind_param("i", $requestId);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                $itemId = $row['ItemID'];

                // Update the ItemState of the item to 2
                $stmt = $conn->prepare("UPDATE Item SET StatusID=2 WHERE ItemID=?");  // Available status is ID 1
                $stmt->bind_param("i", $itemId);
                $stmt->execute();

                // Reject all other requests for the same item
                $stmt = $conn->prepare("UPDATE Claim_Requests SET StateID=3 WHERE ItemID=? AND RequestID<>?");
                $stmt->bind_param("ii", $itemId, $requestId);
                $stmt->execute();
                header("Location: ../admin/admin-view-requests.php?message=request-approved");
            } else {
                header("Location: ../admin/admin-view-requests.php?error=request-action-failed");
            }
        } else {
            header("Location: ../admin/admin-requests.php?error=request-action-failed");
        }
    } else {
        header("Location: ../admin/admin-requests.php?error=request-action-failed");
    }

?>