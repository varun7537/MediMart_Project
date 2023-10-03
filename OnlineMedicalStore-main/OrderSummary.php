<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="css/OrderSummary.css">
</head>
<body>
    <div class="Container" name="abc"> 
        <h1>Order Summary</h1>
        <div class="container" name="bc">
       
            <img src="assets/bournvita.jpg">
        
            <div class="container" name="c">
              <h2>Product Name <a href="your link here"><i class="bi bi-trash"></i></a></h2>
                    
                    <h3>Rs 200.00</h3>
                    <h3 name="save"><del>Rs 250.00</del> Save 50% off</h3>
                    <hr/>
                    <p>Add more item<a href="your link here"> <i class="bi bi-plus" name="plus"></i></a></p>
            </div>
          </div>
          
        <div class="Container" name="d">
            <h2>Payment Details</h2>
            <table>
                <tr>
                    <td>MRP Total</td>
                    <td >Rs 200.00</td>
    
                </tr>
                <tr>
                    <td>Additional Discount</td>
                    <td>Rs 10.00</td>
    
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>Rs 190.00</td>
    
                </tr>
                <tr>
                    <td> Shipping & Delivery Changes</td>
                    <td>Rs 0.00</td>
    
                </tr>
                <tr>
                    <td style="color: rgb(37, 245, 37);">Total Payable Amount</td>
                    <td>Rs 190.00</td>
    
                </tr>
                <tr>
                    <td> Total Saving Amount</td>
                    <td>Rs 10.00</td>
    
                </tr>
            </table>
                <button type="submit" onclick="" name="proceed">Proceed</button>
                
        
           
    
          </div>
       
      
      
        <div >
        
          <input type="tel"  placeholder="Apply Coupon Code ">
          <button name="btn1" onclick="">Apply Code</button><i class="bi bi-tag-fill" name="tag"></i><h3 class="dis">For 5% Discount</h3><br>
          <button type="button" name="btn" >Delivery Address</button>
          
  
          
      </div>
  
      
     
        
        </div>
</body>
</html>