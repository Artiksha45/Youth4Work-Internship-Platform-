<?php
	session_start();
	if(!isset($_SESSION['clgname'])){
		header("location:clglogin.php");
	}
  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Company Home</title>
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

	
<body>
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Welcome College</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="clgwelcome.php">College Home</a></li>
          <li class="menu-active"><a href="clgstulist.php">Student List</a></li>
          <li ><a href="clgappliedstu.php">Applied Student List</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>


	</header>

	<body>

    <div class="container">
        <h1><b>All Students</b></h1>
        <table class="table table-striped">
            <thead >
            <tr>
                <th scope="col">Sid</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>               
                <th scope="col">Mobile</th>               
            </tr>
  </thead>
  <tbody>
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
      $user = $_SESSION["clgname"];
      $sql = "SELECT * FROM student";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            ?>
         
    
  
    <tr>
      <th scope="row"><?php echo $row["sid"]; ?></th>     
      <td ><?php echo $row["sname"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
    </tr>
 
            <?php
        }
    } else {
        echo "0 results";
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
<style>
  
  .main{
    margin-top:100px;
    width:100vw;
    height:100%;
    display:flex;
    justify-content:center;
}

table{
    margin-top:40px;
}
h1{
    margin-top:100px;
    color:black;
}
</style>
