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
<?php
    include_once "includes/nav.php"; 
    include_once "includes/db.inc.php";
    ?>
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
                    <button type="button" class="button" id="submit"><i class="fa fa-file-lines mr-3"></i>Upload Image</button>
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
			<a href="OrderSummary.php"><button type="button" class="button">Continue</button></a>
				<?php
				if (isset($_POST['submit'])) {
					$file = $_FILES['file'];
					
					$filename = $_FILES['file']['name'];
					$filetmpname = $_FILES['file']['tmp_name'];
					$filesize = $_FILES['file']['size'];
					$fileerror = $_FILES['file']['error'];
					$filetype = $_FILES['file']['type'];

					$fileext = explode('.', $filename);
					$fileactext = strtolower(end($fileext));
					$allowed = array('jpg', 'jpeg', 'png', 'pdf');
					if (in_array($fileactext, $allowed)) {
						if ($fileerror === 0) {

						} else {
							echo "Error in upload";
						}
					} else {
						echo "File Not Supported";
					}
				} 
				?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </main>

	<footer>
             <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About <strong class="text-primary">MediMart</strong></h3>
              <p>You can place your order anytime from anywhere as there is no issue of pharmacy closing down. 24*7 online customer supports are there to solve your queries regarding medicines.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="user/covid-19essentials.php" style="color: crimson; text-decoration: none; font-size: 17px;">COVID ESSENTIALS</a></li>
              <li><a href="#" style="color: crimson; text-decoration: none; font-size: 17px;">MEDICAL PRODUCTS</a></li>
              <li><a href="user/contact.php" style="color: crimson; text-decoration: none; font-size: 17px;">CONTACT </a></li>
              <li><a href="#" style="color: crimson; text-decoration: none; font-size: 17px;"> SUPPORT</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">2/44,Mecare Estate,Chennai</li>
                <li class="phone"><a href="tel://044-23923929210" style="color: crimson; text-decoration: none; font-size: 17px;">+044 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with Group33 <i class="icon-heart text-danger" aria-hidden="true"></i> 
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
             
        
        </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>


<div id="webchat"/>

<script src="https://cdn.jsdelivr.net/npm/rasa-webchat@1.5.0/lib/index.min.js"></script>
 <script> WebChat.default.init({

    selector: "#webchat",

    customData: {"language": "en"}, // arbitrary custom data. Stay minimal as this will be added to the socket

    socketUrl: "http://localhost:5005",

    socketPath: "/socket.io/",

    title: "pharmacy",

    subtitle: "assistant",

  })
    </script>
<?php include_once "includes/footer.php"; ?>

</body>
</html>