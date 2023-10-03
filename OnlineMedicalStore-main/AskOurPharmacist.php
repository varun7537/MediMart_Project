<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once "includes/head.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Home</title>
  </head>
    <link rel="icon" href="assets/medical-pills-pot-icon-2.png">
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
               
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                <!-- Font Awesome CDN-->
        <script src="https://kit.fontawesome.com/dd6d077d8c.js" crossorigin="anonymous"></script>
                <!-- SlickSlider-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
        <link rel="stylesheet" href="med.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
        <body>
    <?php
    include_once "includes/nav.php"; 
    include_once "includes/db.inc.php";
    ?>
    <hr>
    <div class="container">
        <form action="">
            <h3>Ask Our Pharmacist</h3>
            <h4>MediMart provides online consultations with a Pharmacist,aiming to contribute to a healthy lifestyle</h4>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quis eum! Eum, ipsum voluptatem fugiat hic nihil eos. Similique fuga iste dolore porro illum quis optio facilis modi corrupti animi?</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corporis impedit explicabo optio, maxime quas fugiat nulla fugit neque eaque eligendi placeat temporibus tenetur</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus aperiam dolore sapiente officia reiciendis suscipit </li>
                <li>voluptatibus necessitatibus voluptate corrupti in nihil sint, vel est eum cupiditate reprehenderit ex dolor! Fugiat.</li>
            </ul>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label >Name:
                        <br>
                        <input type="text" name="name" required oninvalid="this.setCustomValidity('Enter name')" oninput="this.setCustomValidity('')" /></label>
                        <div class="invalid-feedback">
                            Please enter valid name
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <label for="email">Email-ID
                        <br>
                        <input type="email" id="email" required oninvalid="this.setCustomValidity('Enter email')" oninput="this.setCustomValidity('')" /></label>
                        <div class="invalid-feedback">
                            Please enter valid email
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="title">Title
                <br>
                <input type="text" id="title"  required oninvalid="this.setCustomValidity('Enter title')" oninput="this.setCustomValidity('')" />
                </label>
                <div class="invalid-feedback">
                    Please enter valid title
                </div>
            </div>
            <div class="form-group">
                <label >Description
                    <br>
                    <textarea name="description" id="description"  required oninvalid="this.setCustomValidity('Enter description')" oninput="this.setCustomValidity('')" ></textarea></label>
                    <div class="invalid-feedback">
                        Please enter valid description
                    </div>
            </div>
            <br>
            <button type="submit" id="submit" onvalid="alert('Successfully registered your account')" 
            style="height: 70px;
                    width: 250px;
                    border: 1px solid crimson;
                    color: white;
                    background-color: crimson;
                    font-size: 25px;
                    font-weight: 600;
                    cursor: pointer;">Submit Question</button>
        </form>
        </div>
        <br>
        <br>
        <br>
        <hr>
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