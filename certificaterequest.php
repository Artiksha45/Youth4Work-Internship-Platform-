<?php
	session_start();
	if(!isset($_SESSION['empname'])){
		header("location:emplogin.php");
	}
	
	$username=$_SESSION['empname'];
	

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
        <h4><a href="#intro" class="scrollto" >Internship List Is Here</a></h4>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="empwelcome.php">Company Home</a></li>
          <li><a href="jobpost.php">Post A Internship</a></li>
          <li><a href="uploadlectures.php">Upload Lectures</a></li>
          <li ><a href="empjobstatus.php">Internship Application Status</a></li>
          <li class="menu-active"><a href="jobappliedlist.php">Applied List</a></li>
          <li ><a href="stuqueryes.php">Student Querys</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	
  
	<div class="container mt-5">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company ID</th>
      <th scope="col">Courses</th>
      <th scope="col">Student Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

$username = $_SESSION["empname"];
$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
$query = "select * from certificaterequest where cname='$username'";

$result = $conn->query($query);
if ($result->num_rows > 0) {
   
  while($row = $result->fetch_assoc()) {  

?>

    <tr>
      <th scope="row">1</th>
      <td><?php  echo $row["cname"]; ?></td>
      <td><?php  echo $row["jpost"]; ?></td>
      <td><?php  echo $row["sname"]; ?></td>
      <td>
      <?php if ($row["status"] != 1) { ?>
    <a class="btn btn-success" href="uploadcer.php?id=<?php echo $row["id"]; ?>&sn=<?php echo $row["sname"]; ?>" role="button">Approve</a>
<?php } else { ?>
    <a class="btn btn-primary" href="#" role="button">Uploaded</a>
<?php } ?>

</td>

    </tr>
<?php
  }
}

?>
  </tbody>
</table>

	
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

