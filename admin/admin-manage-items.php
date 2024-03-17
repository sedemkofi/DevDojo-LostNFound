<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin-page.css">
    
</head>
<body>
    
    <div class="content">
        <div class="header">
            <div class="user-actions">
                <div class="dropdown">
                    <button class="show-sidebar-button">
                        <img src="../images/logo.png" alt="Logo" class="lost-logo"> 
                    </button>
                    <div class="dropdown-content">
                        <a href="admin-manage-admins.html">View Admins</a>
                        <a href="../settings.html">Settings</a>  
                    </div>
                </div>
            </div>
        </div>
        <h2 >Items</h2> 
        

        <div class="container">
            <table>
                <tr>
                    <th width="150px">Item Name</th>
                    <th width="150px">Date Found</th>
                    <th width="150px">Date Added</th>
                    <th width="150px">Location</th>
                    <th colspan="3" align="center">Action</th>
                </tr>
                <tr>
                    <?php 
                    displayItems($items);
                ?>
            </table>
        </div>
        <button id="addItemButton">Add Item</button><br><br>
        <br>
    <form action="../actions/add_item_action.php" method="post" name="addItem" id="addItem">
        <label for="itemName">Item Name</label><br><br>
        <input type="text" id="itemName" name="itemName" placeholder="Enter item name" required>        
        <br><br>
        <label for="last-seen-location">Last Seen Location</label><br><br>
        <input type="text" name="location" id="location" placeholder="Enter a Location"><br><br>
        <label for="last-seen-location">Last Seen Date</label><br><br>
        <input type="date" name="dateSeen" id="dateSeen"><br><br>
        <label for="picture" id="picture-label">Upload Image</label>
        <input type="file" id="picture" name="picture" accept="image/*" required><br><br>
        <button type="submit" value="submit" name="addItemSubmit" id="addItemSubmit">Create</button>
        <button id="cancelAddItem">Cancel</button>
    </form> 
    <script src="../js/admin.js"></script>
    </div>
</body>