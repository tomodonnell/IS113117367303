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
    
</DIV>        
    </body>
    
</html>