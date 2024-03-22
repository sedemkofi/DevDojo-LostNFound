<<<<<<< HEAD
<?php
    require '../settings/core.php';
    if(!isset($_SESSION['user'])) {
        header("Location: signin.php");
    }
    if (isset($_GET['message']) == 'request-processed') {
        echo '<script>alert("Your item claim request is being processed. You will soon be contacted for item identification and retrieval")</script>';
    } 
    if (isset($_GET['error'])=='claim-failed') {
        echo '<script>alert("Failed to process item claim request. Please try again.")</script>';
    }

?>
=======

>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found - Missing Items</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/missing-item.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="../css/loading.css">

=======
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
</head>
<body>
<div class="loader_bg">
    <div class="loader"><img src="../images/loading.gif" alt="#" /><br><p>Loading</p></div>
</div>
<div class="content">
    <div class="header">
        <div class="user-actions">
            <div class="dropdown">
                <button class="show-sidebar-button">
                    <img src="../images/logo.png" alt="Logo" class="lost-logo"> 
                </button>
                <div class="dropdown-content">
                    <a href="homepage.php">Home</a>
                    <a href="settings.php">Settings</a>                    
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <h1>Lost Items</h1>
    <div class="grid-container">

        <?php
            include '../settings/connection.php';

<<<<<<< HEAD
            $query = "SELECT * FROM Item WHERE StatusID = 1"; //Get all items with status ID of 1 which represents unclaimed items
=======
            $query = "SELECT * FROM Item";
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
            $result = mysqli_query($conn, $query);

            if ($result) {
                $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach ($items as $item) {
                    echo "<div class='grid-item' onclick='showClaimButton(\"claim-btn" . $item['ItemID'] . "\")' id='item" . $item['ItemID'] . "'>";
                    echo "<img src='" . $item['ImageSource'] . "' alt='item-image'>";
                    echo "<div class='item-info'>";
                    echo "<h3>" . $item['ItemName'] . "</h3>";
                    echo "<span class='last-seen'>" . $item['LocationFound'] . "</span>";
<<<<<<< HEAD
                    echo "<form action='../actions/claim_item.php' method='post'>
                            <input type='hidden' name='itemId' value='" . $item['ItemID'] . "'>
                            <input type='hidden' name='userId' value='" . $_SESSION['user']['UserID'] . "'>
                            <button class='claim-btn' style='display: none;' name='claimItemSubmit' value='claimItemSubmit' id='claim-btn" . $item['ItemID'] . "' type='submit'>Claim</button>
                        </form>";
=======
                    echo "<button class='claim-btn' style='display: none;' id='claim-btn" . $item['ItemID'] . "'>Claim</button>";
>>>>>>> ec6ce5976a480027ae4b9f379390c39d61f9adc1
                    echo "</div>";
                    echo "<div class='person-name'>Date Found: " . $item['DateFound'] . "</div>";
                    echo "</div>";
                }
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

            $conn->close();
        ?>
    </div>
</body>
<script>
    window.addEventListener('load', function() {
    setTimeout(function() {
        document.querySelector('.loader_bg').style.display = 'none';
    }, 500);  // 1000 milliseconds = 1 seconds
    });
    // Selecting elements with IDs 'item1' and 'claim-btn1'
    const item1 = document.getElementById('item1');
    const claimbtn1 = document.getElementById('claim-btn1');

    // Getting all elements with class 'claim-btn'
    function showClaimButton(buttonName) { 
        const buttons = document.getElementsByClassName('claim-btn');  // Selecting all claim buttons by class name
        for (let i = 0; i < buttons.length; i++) {  // Looping through all claim buttons
            buttons[i].style.display = 'none';
        }
        // Selecting the specific claim button to show
        const button = document.getElementById(buttonName);
        if (button.style.display === 'none') {
            button.style.display = ''; 
        }else{
            //button.style.display = 'none';
        }
        
    }
</script>
