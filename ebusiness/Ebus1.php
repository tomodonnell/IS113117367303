<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
      
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
          <h2>Select a Product</h2>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
            <!-- Display radio buttons for cloud service options -->
            <label for="salesforce" class="label1">
              <input type="radio" id="salesforce" name="product" checked onClick="rbChecked()"/>
              SalesForce @ $100
            </label>
                
            <br>
            <br>
            
            <label for="cloud9" class="label2">
              <input type="radio" id="cloud9" name="product" onClick="rbChecked()"/>
               Cloud9 @ $200
            </label>
                
            <br>
            <br>
            
            <label for="aws" class="label3">
              <input type="radio" id="aws" name="product" onClick="rbChecked()"/>
              AWS @ $300
            </label>
                
            <br>
            <br>
            
            <label for="gmail" class="label4">
              <input type="radio" id="gmail" name="product" onClick="rbChecked()"/>
              Gmail @ $400
            </label>
            
            <br>
            <br>
            
            <!-- Breakdown of the price for the selected option -->
            <label for="subtotal" class="label5">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            <br>
            
            <label for="discount" class="label6">
              Discount @ 5% &nbsp;&nbsp;&nbsp; 
              <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
                
            <br>
            <br>
            
            <label for="vat" class="label7">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
            <br>
            
            <label for="total" class="label8">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      
            <br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <br>      
          </form>
            
          <!-- button for calculating price breakdown of the selected option -->    
          <button class="cal_btn" onClick="calcSub()">Calculate Cost</button>
             
          <br>
          <br>  
          <!-- button for clearing the selected options -->    
          <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice</a>
      </div>
    </body>
</html>