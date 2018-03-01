<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    <body>
        
        <!--Inserting a Navigation bar -->
            <nav>
                <ul>
                 <li><a href="../homepage.html">Home</a></li>
                 <li><a href="About_Us.html">About Us</a></li>
                 <li><a href="About_Cloud.html">About Cloud</a>
                 <li><a href="../ebusiness/Ebus1.php">Shop for Cloud Products</a></li>
                 <li><a href="Contact_Us.html">Contact Us</a></li>
                </ul>
            </nav>

<div>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                    <br>
                    
                    <label for="user_name">Name</label>
                    <input type="name" id="user_name" placeholder="Enter Name" maxlength="20">

                    <br>
                    
                    <label for="user_email">Email Address</label>
                    <input type="email" id="user_email" placeholder="Enter email address ">

                    <br>
                    
                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
        
            
            ?>
</div>        
    </body>
</html>