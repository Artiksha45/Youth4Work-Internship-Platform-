<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:emplogin.php");
	}
  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Student Home</title>
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
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="css/style.css" rel="stylesheet">
	
</head>

	
<body >
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Welcome Student</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#">Student Home</a></li>
          <li><a href="mainjobs.php">Find A Internship</a></li>
          <li><a href="appliedjobs.php">Applied Internships</a></li>
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>


    <?php 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "intern";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $user = $_SESSION["username"];
      
      $sql = "SELECT * FROM student where username='$user'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           //$uname = $row["username"];
           //$name = $row["sname"];
           $uname = $row["sname"];
           $name = $row["username"];
           $mobile =  $row["mobile"]; 
           $m1 = $row["10th_marks"];
           $m2 = $row["12th_marks"];
           $m3 = $row["grad_marks"];
           $gender =  $row["gender"];
        }
    } else {
        echo "0 results";
    }      

    ?>
 
  <div class="main">
  <div class="card" style="width: 35rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><b>Username : <?php echo $name;  ?></b></h5>
  
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Name : </b><?php echo $uname;  ?></li>
    <li class="list-group-item"><b>Mobile : </b><?php echo $mobile;  ?></li>
    <li class="list-group-item"><b>10th Marks : </b><?php echo $m1;  ?></li>
    <li class="list-group-item"><b>12th Marks : </b><?php echo $m2;  ?></li>
    <li class="list-group-item"><b>Grade : </b><?php echo $m3;  ?></li>
    <li class="list-group-item"><b>Gender : </b><?php echo $gender;  ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link"></a>
    <a href="logout2.php" class="card-link">Logout</a>
  </div>
</div>
  </div>

	</header>	
	
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


<style>
  .main{
    margin-top:100px;
    width:100vw;
    height:100%;
    display:flex;
    justify-content:center;
}

body {
  background-image: url("https://images.unsplash.com/photo-1515187029135-18ee286d815b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
  background-size:cover;
  /* background-position: center; */
  background-repeat: no-repeat;

  color:black;
}
.card-body{
  background-color:white;
}
.card{
  width:80%;
}

</style>