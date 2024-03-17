<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/missing-item.css">
</head>
<body>
<div class="content">
    <div class="header">
        <div class="user-actions">
            <div class="dropdown">
                <button class="show-sidebar-button">
                    <img src="/images/logo.png" alt="Logo" class="lost-logo"> 
                </button>
                <div class="dropdown-content">
                    <a href="homepage.html">Home</a>
                    <a href="settings.html">Settings</a>                    
                    <a href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <h1>Lost Items</h1>
    <div class="grid-container">

        <div class="grid-item" onclick="showClaimButton('claim-btn1')" id="item1">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen">Library</span>
                <button class="claim-btn" style="display: none;" id="claim-btn1">Claim</button>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        
        <div class="grid-item" onclick="showClaimButton('claim-btn2')">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
                <button class="claim-btn" style="display: none;" id="claim-btn2">Claim</button>
            </div>
            <div class="person-name">Posted by: Yvonne</div>
        </div>
        <div class="grid-item" onclick="showClaimButton('claim-btn3')">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Archer Cornfield</span>
                <button class="claim-btn" style="display: none;" id="claim-btn3">Claim</button>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
        <div class="grid-item">
            <img src="images/apple.jpg" alt="apple-pencil">
            <div class="item-info">
                <h3>Apple Pencil</h3>
                <span class="last-seen"> Library</span>
            </div>
            <div class="person-name">Posted by: Patrick</div>
        </div>
    </div>
</body>
<script>
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