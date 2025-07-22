<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:studentlogin.php");
	}
	
	$username=$_SESSION['username'];
	
	
?>

<!DOCTYPE html>
<html>
<head>
	
	
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
   <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
   
</head>
<body id="back">
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" >Internship List Is Here</a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomestudent.php">Student Home</a></li>
          <li><a href="mainjobs.php">Find A Internship</a></li>
          <li ><a href="appliedjobs.php">Applied Internships</a></li>
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	

	<div class="container mt-5">


    <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Username" pattern="[A-Za-z ]+" required>
 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No</label>
    <input type="text" name="mobile"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile" pattern="\b\d{10}" required>
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Entery your query</label>
    <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit Query</button>
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
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


<?php


    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $query = $_POST["query"];
        $cname = $_GET["c"];


        echo $name;
        echo $mobile;
        echo $query;
        echo $cname;

        $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");
        
    $result = mysqli_query($conn,"insert into querys values ('$name','$mobile','$query','$cname')") or die("Someting went wrong Failed".mysqli_error($conn));
	echo "<script>alert('Query Submited Successfull')</script>";
	echo "<script>location.href='studentlogin.php'</script>";

    }





?>
