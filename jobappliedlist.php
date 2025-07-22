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
        <h4><a href="#intro" class="scrollto" >Internship Applied List Is Here</a></h4>
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
	
	
	
	
    <div style="text-align:center; margin-top:20px;">
        <h3 ><b>Here Is The Applied List</b></h3>
        <h3 ><b>Here Is The Certificate List - <a href="certificaterequest.php">Show Requests</b></a></h3>
		 
		<form method="POST">
   
    </div>
	
	<div class="container">
	<table class="table">
  <thead class="thead-dark">
    <tr>
    <tr>
                <th scope="col">Internship Id</th>
				<th scope="col">Student Name</th>
				<th scope="col">Comany Name</th>
               
    </tr>
  </thead>
  <tbody>
 
        
        <tbody>
			
			<script>
			
			function cancel(jid)
				{	//alert(jid);
					var ajx=new XMLHttpRequest();
			ajx.onreadystatechange=function()
			{
				if ( this.readyState == 4 && this.status == 200 )
				{
					alert(this.responseText);
				}
			}
			ajx.open( "POST", "cancel2.php", true );
			ajx.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
			ajx.send("jid=" +jid);
				}
	</script>
			
			
             
			
	
      
			  
			 <?php
    $eid = $_SESSION["empname"];
    $conn = mysqli_connect("localhost", "root", "", "intern") or die("connection failed" . mysqli_connect_error());
    
    $query = "SELECT * FROM job WHERE eid='$eid'";
    $result = $conn->query($query);

    if (!$result) {
        die('Invalid query: ' . mysqli_error($conn));
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><form action='' method='POST'>" . $row['jid'] . "<td><a href='profile.php?u=" . $row["sid"] . "'>" . $row['sid'] . "</a></td><td>" . $row["cname"] . "</td><td>";
        }
    } else {
        echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
    }
?>


       
		

        </tbody>
    </table>
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








?>
