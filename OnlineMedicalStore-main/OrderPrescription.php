<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/OrderPrescription.css">

    <title>MediMart - Empowering Medicine Access</title>
</head>
<body>
    <main>
    <div class="order-box">
        <div class="leftside-container">
            <div class="container-fluid">
                <div class="left-side">
                    <h2>Valid Prescription Guide</h2>
                    <p>Your prescription will be sent to the pharmacist for processing</p>
                    <img src="image.png" alt="image" height="400" width="400">
                    <br>
                    <br>
                    <ul>
                        <li>Do not crop any part of the prescription</li>
                        <li>Avoid blurred images</li>
                        <li>Include details of doctor and patient, date of visit</li>
                        <li>Supported files: PNG, JPEG, PDF etc</li>
                        <li>File size limit: 5MB</li>
                    </ul>
                </div>
                
            <div class="line ml-5"></div>
                
                <div class="right-side">
                    <h2>Upload Prescription</h2>
                    <p>Please upload images of valid prescription from your doctor</p>
                    <button type="button" class="button"><i class="fa fa-file-lines mr-3"></i>Upload Image</button>
                </div>
            </div>
        </div>
        <div class="rightside-container">
            <div class="container-fluid">
                <center><h2>Order Info</h2></center>
                <h4>Select how do you want to proceed with the order</h4>
                <div class="first-option mt-3">
                    <center><h4>Search and Add Medicine</h4></center>
                    <center><span><i class="fa fa-tablets"></i></span>
                    <input type="radio" name="opt1" id="opt1">
                    <label for="opt1">Manually search and add medicines in the cart</label></center>
                </div>
                <div class="second-option mt-3">
                    <center><h4>For any query</h4></center>
                    <center><span><i class="fa fa-comments"></i></span>
                    <input type="radio" name="opt2" id="opt2">
                    <label for="opt2">Call our Doctor's to ask</label></center>
                </div>
            </div>
            <br>
            <button type="button" class="button">Continue</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </main>
</body>
</html>