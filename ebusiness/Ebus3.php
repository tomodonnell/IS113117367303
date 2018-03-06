<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
        <!--Implementing external css-->
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
        <h2 class="ebus3_heading">Purchase Receipt</h2>
        
        <?php  
        // Set session variables
          $_SESSION["user_name"] = $_POST["user_name"];
          $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        <p class="ebus3_name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["user_name"] . ".";
            ?>
        </p>
        
        <p class="ebus3_email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["user_email"] . ".";
            ?>
        </p>
        
        <p class="ebus3_total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        </p>
    </div>
    </body>
</html>