<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

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
          <h4>Select a Product</h4>
          
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        </DIV>
    
    </body>
</html>