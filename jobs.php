
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
        <h1><a href="#intro" class="scrollto"><b>Internships List Is Here</b></a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="emplogin.php">Company Login</a></li>
          <li><a href="studentlogin.php">Student Login</a></li>
		 <li  class="menu-active"><a href="jobs.php">Find Internships</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
    <div style="text-align:center; margin-top:20px;">
        <h3><b>Here Is The Internship List</b></h3>
		 
		<form method="POST">
    <div style="text-align: right; margin-right:200px; ">
	<label>Search: </label>	
    <input type="text" placeholder="Type To Search" name="key" autocomplete="off" style=" border-right:none; border-left: none; border-top:none;outline: none;border-bottom: 1px solid white;background-color:transparent; color: black"  >
			
			 <button type="submit" class="btn btn-info btn-xs" name="sub" >
     			 <span class="glyphicon glyphicon-search"></span> Search
   					 </button>
		</form>
		
		
		</div>
    </div>
	
	
	
	
	<div class="container">
<table class="table">
  <thead class="thead-light">
    <tr>
    <th scope="col">Internship Id</th>
                <th scope="col">Company Name</th>
				<th scope="col">Internship Description</th>
				<th scope="col">Internship Location</th>
				<th scope="col">Post Internship</th>
				<th scope="col">Internship Duration</th>
                <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  
            <?php
			
			
			
			
			if(isset($_POST['sub']))
				{
						$link=mysqli_connect("localhost","root","","intern") or die($link);
						$k=$_POST['key'];
	
				$k=mysqli_real_escape_string($link,$k);

				$result=mysqli_query($link,"select * from job where cname like '%".$k."%' or jdesc like '%".$k."%'  or jpost like '%".$k."%'  or loc like '%".$k."%'  or sal like '%".$k."%'") or die("failed to query database".mysqli_error($link));
                if ($result->num_rows > 0) 
				{
                    while($row = $result->fetch_assoc()) 
					{
						

                         echo "<tr><td><form action='mainjobs.php' method='post'>".$row['jid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['loc']."<td>".$row['sal']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-success' name='_view'>Apply</button></form> <br> <br>";
						if(isset($_POST['_view']))
						 {
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";
						 }
                    }
                }
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
				
				
	
			}
			else if(!isset($_POST['sub']))
			{
				$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from job";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><form action='mainjobs.php' method='post'>".$row['jid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['loc']."<td>".$row['sal']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-success' name='_view'>Apply</button></form> <br> <br>";
						 if(isset($_POST['_view']))
						 {
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";
						 }
						
                    }
                }
				
				
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
			}  
			
			
                
                else
				{
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

