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
    </head>
    <body>
        
        <!--Inserting a Navigation bar -->
<nav>
    <ul>
     <li><a href="../homepage.html">Home</a></li>
     <li><a href="../cv/cv_page1.html">Curriculum Vitae</a>
    <ul>
     <li><a href="../cv/cv_page1.html">Personal Details</a></li>
     <li><a href="../cv/cv_page2.html">Education</a></li>
     <li><a href="../cv/cv_page3.html">Work Experience</a></li>
   
    </ul>
     </li>
     <li><a href="../interest.html">Interests</a>
    <ul>
     <li><a href="../interests/sports.html">Sport</a></li>
     <li><a href="../interests/travel.html">Traveling</a></li>
   
    </ul>
     </li>
     <li><a href="../ebusiness/Ebus1.php">eBusiness Shop</a>
     </li>
     <li><a href="../homepage.html">Cloud Service</a></li>
    </ul>
</nav>

<DIV style="position: absolute; top:80px; left:80px;">
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
</DIV>        
    </body>
</html>