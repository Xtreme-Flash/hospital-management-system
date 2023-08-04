<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style1.css">

    <title>User Registration</title>
    <script type="text/javascript">
      function valid()
      {
       if(document.registration.password.value!= document.registration.password_again.value)
      {
      alert("Password and Confirm Password Field do not match  !!");
      document.registration.password_again.focus();
      return false;
      }
      return true;
      }
      </script>
          
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register</h3>
            <p class="mb-4"></p>
            <form action="#" name="registration" id="registration"  method="post" onSubmit="return valid();">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" name="full_name" placeholder="full name" style="font-size: 1.5rem;" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">City</label>
                    <input type="text" class="form-control" name="city" placeholder="city" style="font-size: 1.5rem;" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" style="font-size: 1.5rem;" onBlur="userAvailability()" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Address</label>
                    <input type="text" class="form-control" name="address" style="font-size: 1.5rem;" placeholder="address" required>
                  </div>    
                </div>
                <div class="form-group">
                  <label class="block" style="margin-left: 3rem; height: 4rem; font-size: 2rem;">
                    Gender
                  </label>
                  <div class="clip-radio radio-primary" style="font-size: 2rem; margin-left: 2rem;">
                    <input type="radio" id="rg-female" name="gender" value="female" style="font-weight: 500;" >
                    <label for="rg-female">
                      Female
                    </label>
                    <input type="radio" id="rg-male" name="gender" value="male">
                    <label for="rg-male">
                      Male
                    </label>
                  </div>
                </div>
              <div class="row" style="margin-left: 0.1rem;">
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style="font-size: 1.5rem;" required>
                  </div>
                </div>
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="re-password">Re-Type Password</label>
                    <input type="password" class="form-control"  id="password_again" style="font-size: 1.5rem;" name="password_again" placeholder="Password Again" required style="width: 20rem;">
                  </div>
                </div>
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Creating an account means you're okay with our Terms and Conditions and our Privacy Policy.<p &nbsp;></a><a href="user-login.php" >Log In</a></p></span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>
	  		
              <input type="submit" class="btn px-5 btn-primary" id="submit" name="submit">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		  </body>
</html>