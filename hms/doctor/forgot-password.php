<?php
session_start();
error_reporting(0);
include("include/config.php");
//Checking Details for reset password
if(isset($_POST['submit'])){
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$query=mysqli_query($con,"select id from  doctors where contactno='$contactno' and docEmail='$email'");
$row=mysqli_num_rows($query);
if($row>0){

$_SESSION['cnumber']=$contactno;
$_SESSION['email']=$email;
header('location:reset-password.php');
} else {
echo "<script>alert('Invalid details. Please try with valid details');</script>";
echo "<script>window.location.href ='forgot-password.php'</script>";


}

}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pateint  Password Recovery</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="style34.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
<body>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="form-container">
					<a img src="../assets/images/78.png" alt=""></a>
                    <div class="form-icon" >
                        <i class="fas fa-user-circle">
						<svg xmlns="http://www.w3.org/2000/svg" style="height: 10rem; fill: white;" viewBox="0 0 512 512"><path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"/></svg></i>
                        <span class="signup"><a href="index.php">Have account? Login</a></span>
                    </div>
                    <form class="form-horizontal" method="post">
                        <h3 class="title">Forgot-Password</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="text" name="contactno" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="email" name="email" placeholder="Registred Email">
                        </div>
                        <button class="btn signin" type="submit" name="submit" >Reset</button>
                        <span class="forgot-pass"><a href="#">..................</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
	
	</body>
	</html>