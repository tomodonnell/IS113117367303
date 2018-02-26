<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
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
     <li><a href="../interests/cloud.html">Cloud Computing</a></li>
    </ul>
     <li><a href="../homepage.html">Cloud Service</a></li>
    </ul>
</nav>
        
        
        <div style="position: absolute; 
                    top:80px; 
                    text-align:center;">
          <h4>Select a Product</h4>
          
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                gmail @ $400
              </label>
              
              <br>
              <!--Price break down for cloud services-->
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total" class="total_textbox">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <button onClick="calcSub()">Calculate Cost</button>
            <br>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        </div>
       
    </body>
</html>