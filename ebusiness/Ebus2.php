<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
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
     <div class="ebusshop">   
        <h2 class="ebus2_heading">Please enter your payment details</h2>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="user_name" class="lbl_name">
                Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="name" id="user_name" name="user_name" placeholder="Enter Your Name">
            </label>
            
            <br>
            <br>
            
            <label for="user_email" class="lbl_email">
                Email address: &nbsp;&nbsp;
                <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com">
            </label>
            
            <br>
            <br>

            <label for="user_pin" class="lbl_pin">
                PIN: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="pin" id="user_pin" name="user_pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
            </label>
            
            <br>
            <br>
            
            <button class="button button1" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="button button4" onClick="validateName()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
        ?>
    </div>
    </body>
</html>