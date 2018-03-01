<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
        <title>RECEIPT</title>
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
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total Paid: " . $_SESSION["total"] . ".";
        ?>
        
        <br>
        
        <?php
         echo "Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br>
        
        <?php
         echo "Email: " . $_SESSION["user_email"] . ".";
        ?>
        
        <br>
    
</div>        
    </body>
    
</html>