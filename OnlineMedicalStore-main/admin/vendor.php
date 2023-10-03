<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Entry</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/vendor.css">
</head>
<body>
<?php
    include_once "includes/nav.php"; 
    include_once "includes/db.inc.php";?>
    <br>
    <section class="container">
    <h1>New Vendor Registration</h1>
    <h2>Create New Account</h2>
        <form action="" class="form" >
            <div class="inputbox" >
                <label type="fname">Enter Your Full Name </label>
                <input type="text" name="fname" placeholder="Enter  FullName" required/>
                <div class="invalid-feedback">
                    Please enter valid name
                </div>
            </div>
            
            <div class="inputbox" >
                <label type="phone">Enter Your Phone Number</label>
                <input type="number" name="phone" placeholder="Enter Phone Number" required/>
                <div class="invalid-feedback">
                    Please enter valid age
                </div>
            </div>

            <div class="inputbox" >
                <label type="address">Enter Your Address</label>
                <textarea type="text" name="address" placeholder="Enter Your Address" required ></textarea>
                <div class="invalid-feedback">
                    Please enter valid description
                </div>
            </div>

            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender"required>
                        <input type="radio" id="check-male" name="gender">
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender">
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender">
                        <label for="check-other">Prefer not to say</label>
                    </div>
                </div>

            </div>
            <br/>
            <div class="input-box" >
                <label type="profile">Upload Your Profile</label>
                <input type="file" class="upload-box" required oninvalid="this.setCustomValidity('Upload your profile')" oninput="this.setCustomValidity('')"/>
                    <div class="invalid-feedback">
                        Please enter valid name
                    </div>
            </div>
            <br/>
            <div class="inputbox" >
                <label type="email">Enter your Email Id </label>
                <input type="email" name="email" placeholder="Enter Email ID"  required/>
                <div class="invalid-feedback">
                    Please enter valid price
                </div>
            </div>
           
            <div class="inputbox" >
                <label type="password">Enter Your Password</label>
                <input type="password" name="password" placeholder="Enter Password"  required/>
                <div class="invalid-feedback">
                    Please enter valid
                </div>
            </div>
            <div class="inputbox" >
                <label type="confirm">Enter Confirm Password </label>
                <input type="confirm" name="confirm" placeholder="Enter Confirm Password " required/>
                <div class="invalid-feedback">
                    Please enter valid price
                </div>
            </div>
            
            
                                  
            <div class="inputbox" >
            <button type="submit" value="" onvalid="alert('Successfuly registered your account')"  >Register</button>
            </div>
        </form>
    </div>
</section> 
</body>
</html>