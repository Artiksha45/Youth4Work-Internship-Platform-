<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:studentlogin.php");
	}
	
	$username=$_SESSION['username'];
	
	if(isset($_POST["submit"])){

        $studentname = $_GET["sn"];
        $companyname = $_GET["cn"];
        $jobpost = $_GET["jp"];
      
        $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

        $result = mysqli_query($conn,"insert into certificateRequest values (NULL,'$companyname','$jobpost','$studentname','','')") or die("Query Failed".mysqli_error($conn));
       if($result){

           echo "<script>alert('Request For Certificate  Successfully')</script>";
        }else{
           echo "<script>alert('Not  Successfully')</script>";

       }

    }
	
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
        <h1><a href="#intro" class="scrollto" >Certificate Request</a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomestudent.php">Student Home</a></li>
          <li><a href="mainjobs.php">Find A Internship</a></li>
          <li class="menu-active"><a href="appliedjobs.php">Applied Internships</a></li>
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	<div style="text-align:center; margin-top:20px;">
      
<form method="POST">
    <input class="btn btn-primary" type="submit" name="submit" value="Request certificate for  - <?php echo  $_GET["jp"]; ?> ">
</form> 



	</div>

    <div class="container mt-5">
    <table class="table">
  <thead>

 

    <tr>
      <th scope="col">#</th>
      <th scope="col">Course</th>
      <th scope="col">View Certificate</th>
   
    </tr>
  </thead>
  <tbody>
  <?php
   $studentname = $_GET["sn"];
 
  $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from certificaterequest where sname='$studentname'";
                $i=0;
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                   
                  while($row = $result->fetch_assoc()) {  
                        $i = $i + 1;
                  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row["jpost"]; ?></td>
      <td><a href="<?php echo $row['certificate']; ?>">Download</a></td>
    
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


<?php








?>
