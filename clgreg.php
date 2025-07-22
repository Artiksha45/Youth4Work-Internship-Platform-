
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>College Registration</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">
    <style>
     
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	
</head>
<body> 
	<br><br><br><br><br>
	<header id="header" style="background:black;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New College Registration</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="http://localhost/Online%20Internship%20Management%20System/">Home</a></li>
          <li><a href="empreg.php">Company Registration</a></li>
          <li class="menu-active"><a href="clgreg.php">College Registration</a></li>
          <li><a href="studentreg.php">Student Registration</a></li>
		 <li class="menu-has-`children"><a href="studentlogin.php">Login</a>
            <ul>
              <li><a href="emplogin.php">Company</a></li>
              <li><a href="studentlogin.php">Student</a></li>
              <li><a href="clglog.php">College</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header"><b><font color="black">Let's Welcome a New Member</font></b></h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form my-5">
    
    <form action="" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">College Name</label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" pattern="{100}[A-Za-z]+" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">College Institute Code</label>
    <input type="text" class="form-control" name="instituecode" id="exampleFormControlInput1" placeholder=""  pattern="[0-9]+" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">College password</label>
    <input type="text" name="pass" class="form-control" name="instituecode" id="exampleFormControlInput1" placeholder="" required>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">College Address</label>
    <textarea class="form-control" name="addresss" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <input class="btn btn-primary" name="submit" type="submit" value="Register">
</form>

        
    </div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->

	
</body>

<style>

body {
  background-image: url("https://images.pexels.com/photos/159490/yale-university-landscape-universities-schools-159490.jpeg?cs=srgb&dl=pexels-pixabay-159490.jpg&fm=jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

  color:white;
}

  </style>
</html>



<?php

if(isset($_POST['submit']))
{
   
    $name = $_POST['name'];
   
    $code = $_POST['instituecode'];
    
    $address = $_POST['addresss'];
    $password = $_POST['pass'];
   
    
    $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

   
    $result = mysqli_query($conn,"insert into collage values ('$name','$code','$password','$address')") or die("Query Failed".mysqli_error($conn));
	echo "<script>alert('Registration Successfull')</script>";
	echo "<script>location.href='clglogin.php'</script>";
}

?>
