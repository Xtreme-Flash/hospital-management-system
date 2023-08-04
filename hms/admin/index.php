<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>



<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./stylerock.css" >
<title>Admin-login</title>
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/plugins1.css"> 
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />




</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src=""
                          style="width: 185px; margin-top: -4rem;" alt="">
                          <a href="../../index.html"><h4 class="mt-1 mb-5 pb-1">HMS Admin Login</h4></a>
                      </div>
      
                      <form method="post">
                        <p>Please login to your account</p>
                        <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                        <div class="form-outline mb-2">
                          <input type="text"  class="form-control" id="form2Example11" name="username"
                            placeholder="Username" />
                          <label class="form-label" for="form2Example11"></label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password"  class="form-control" name="password" id="form2Example22" placeholder="Password" />
                          <label class="form-label" for="form2Example22" ></label>
                        </div>
      
                        <div class="text-center pt--1 mb-8 pb-3" >
                          <button  class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3"   type="submit" style="width: 36rem; height: 4rem; background-color: #ee7724;" name="submit">Login</button>
                          <a class="text-muted" href="forgot-password.php"></a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 md-2" style="padding-right: 1rem;"></p>
                          <a button type="button" class="btn btn-outline-danger" href="registration.php"></a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We Take Care Of Your Healthy Life</h4>
                      <p class="small mb-0">An Administrator provides office support to either an individual or team and is vital for the smooth-running of a business. Their duties may include fielding telephone calls, receiving and directing visitors, word processing, creating spreadsheets and presentations, and filing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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