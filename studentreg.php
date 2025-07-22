
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Company Registration</title>
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
	
	<script>
		
		function usernamecheck() {
			
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check2.php",
	data:'username='+$("#uname").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
		
	},
	
	error:function (){}
	});
}
</script>
	
	
	
	<script>
			
		function fun()
			{
				 document.getElementById("marriael").style.display="none";
				 document.getElementById("marriage").style.display="none";
				 var x=document.getElementById("male").checked;
				
				  	if(x==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
				
				 var y=document.getElementById("female").checked;
				
					if(y==true)
										{
										var a = document.getElementById("marriage").value;
										if(a=="Married")
										{
										document.getElementById("lb2").style.display="none";
										document.getElementById("lb1").style.display="block";
										document.getElementById("pname").style.display="block";
										}
										else
										{
										document.getElementById("lb1").style.display="none";
										document.getElementById("lb2").style.display="none";
										document.getElementById("pname").style.display="none";
										}
										}
					
				
				 var z=document.getElementById("others").checked;
				
					if(z==true)
										{
											document.getElementById("marriael").style.display="none";
											document.getElementById("marriage").style.display="none";
											document.getElementById("lb1").style.display="none";
											document.getElementById("lb2").style.display="none";
											document.getElementById("pname").style.display="none";
										}
									else
										{
											document.getElementById("marriael").style.display="block";
											document.getElementById("marriage").style.display="block";
										}
			}
			
			
		</script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header" style="background:black;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New Student Registration</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="http://localhost/Online%20Internship%20Management%20System/">Home</a></li>
          <li><a href="empreg.php">Company Registration</a></li>
          <li ><a href="clgreg.php">Collage Registration</a></li>
          <li  class="menu-active"><a href="studentreg.php">Student Registration</a></li>
		 <li class="menu-has-`children"><a href="studentlogin.php">Login</a>
            <ul>
            <li><a href="emplogin.php">Company</a></li>
              <li><a href="studentlogin.php">Student</a></li>
              <li><a href="clglogin.php">Collage</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header"><b>Let's Welcome a New Member</b></h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form my-5">
    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Student Name</label>
    <input  type="text" class="form-control"  name="sname" id="exampleFormControlInput1" pattern="[A-Za-z ]+" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Mobile number</label>
    <input  type="text" class="form-control" name="mob" id="exampleFormControlInput1" pattern="\b\d{10}" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Institue code</label>
    <input  type="text" class="form-control" name="clgcode" id="exampleFormControlInput1" pattern="[0-9]+" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Selecte your Resume</label>
    <input type="file" name="resume" class="form-control-file" id="exampleFormControlFile1" required>
  </div>

  <label for="exampleFormControlInput1">Gender: </label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" required>
    <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">10th Marks</label>
    <input  type="text" class="form-control" name="mark1" id="exampleFormControlInput1" pattern="[0-9]+" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">12 th Marks</label>
    <input  type="text" class="form-control" name="mark2" id="exampleFormControlInput1" pattern="[0-9]+" required  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Last Semester Marks</label>
    <input  type="text" class="form-control" name="mark3" id="exampleFormControlInput1" pattern="[0-9]+" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input  type="text" class="form-control" name="uname"  id="exampleFormControlInput1" pattern="[A-za-z]+" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input  type="text" class="form-control" name="pass" id="exampleFormControlInput1" required >
  </div>
  
  <input class="btn btn-success" type="submit" name="submit" value="Register">
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
<style>
      body {
  background-image: url("https://www.exeter.ac.uk/media/universityofexeter/studying/images/responsiveimages/16095.jpg");
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

    $filename =  $_FILES["resume"]["name"];
    $tempname =  $_FILES["resume"]["tmp_name"];
    $folder = "resumes/".$filename;
    move_uploaded_file($tempname,$folder);



    //$sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $mob = $_POST['mob'];
    $ten = $_POST['mark1'];
    $tentwo = $_POST['mark2'];
    $grad = $_POST['mark3'];
    $gender = $_POST['gender'];
   
	$uname= $_POST['uname'];
    $pass = $_POST['pass'];
	$scu='ghjklcvbnm';
	$su='qwertyuiopedfvbnpojhg';
	$pd=$su.sha1($_POST['pass']).$scu;
	
    $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

    $clgcode =  $_POST["clgcode"];
   
    //$eid = mysqli_real_escape_string($conn,$eid);
	$sname = mysqli_real_escape_string($conn,$sname);
	$mob = mysqli_real_escape_string($conn,$mob);
	$ten = mysqli_real_escape_string($conn,$ten);
	$tentwo = mysqli_real_escape_string($conn,$tentwo);
	$grad = mysqli_real_escape_string($conn,$grad);
	$gender = mysqli_real_escape_string($conn,$gender);
	$uname = mysqli_real_escape_string($conn,$uname);
	$pd = mysqli_real_escape_string($conn,$pd);

    $result = mysqli_query($conn,"insert into student values ('$sname','$mob','$clgcode','$folder','$gender','$ten','$tentwo','$grad','$uname','$pd')") or die("Someting went wrong Failed".mysqli_error($conn));
	echo "<script>alert('Registration Successfull')</script>";
	echo "<script>location.href='studentlogin.php'</script>";
}

?>

