<?php
	session_start();
	if(!isset($_SESSION['empname'])){
		header("location:emplogin.php");
	}
?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>New Intership</title>
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
	url: "check3.php",
	data:'username='+$("#jid").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
		
	},
	
	error:function (){}
	});
}
</script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New Intership</a></h1>
      </div>
		
      <nav id="nav-menu-container">
      <ul class="nav-menu">
          <li ><a href="empwelcome.php">Company Home</a></li>
          <li  class="menu-active" ><a href="jobpost.php">Post A Internship</a></li>
          <li><a href="uploadlectures.php">Upload Lectures</a></li>
          <li><a href="empjobstatus.php">Internship Application Status</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header"><b>Internship Post Form</b></h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST">
        <h4 class="page-header" align="center"><b>Fill The Form</b></h4>
        <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-2"><label id="ljid"><b>Internship ID</b><span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="jid" placeholder="Ex: j1" name="jid" onBlur="usernamecheck()" required>
                     <span id='user-availability-status' class='availability-status'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="right"></span> </div>   
            
                         <div class="col-md-3 text-right"><label id="ljname" style="display: none">&nbsp;&nbsp;<b>Company&nbsp;Name</b><span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="jname" placeholder="Enter Your name" name="jname" pattern="{2,30}" title="Only alphabet" style="display: none" required></div>    
                       
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"><p id="errlname"></p></div>
                  </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 text-right"><label id="ljdesc" style="display: none">&nbsp;&nbsp;<b>Internship Description</b><span>&#42;</span></label></div>
                    <div class="col-md-3"><textarea class="form-control" id="jdesc" placeholder="Write About This Internship" name="jdesc" style="display: none" required></textarea> </div>
					<div class="col-md-3 text-right">
                    <label id="lcity" style="display: none"><b>City Name</b><span>&#42;</span></label></div>
                    <div class="col-md-3"> 
                        <input list="country_list" name="city" id="city" class="form-control" placeholder="Enter City name" style="display: none" pattern=[A-Za-z]{2,30} required >
                        <datalist id="country_list">
                        <?php  include("city_list.php"); ?>
                        </datalist>
                    </div>					
                </div>
				
				 <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
				<div class="form-group">
                <div class="row">
                    <div class="col-md-2 text-right"><label id="lpost" style="display: none">&nbsp;&nbsp;<b>Course</b><span>&#42;</span></label></div>
                    <div class="col-md-3">
                        
                    <select  name="post" id="post" class="form-control" placeholder="Enter The Post" style="display: none" required>
                
                    <option value="">Cources...</option>
                    <option value="Network engineering">Network engineering</option>
                    <option value="Game development ">Game development </option>
                    <option value="Artificial intelligence/machine learning">Artificial intelligence/machine learning</option>
                    <option value="Web development ">Web development </option>
                    <option value="Mobile application development">Mobile application development</option>
                    <option value="Cybersecurity">Cybersecurity</option>
                    <option value="Software Development">Software Development</option>

            </select>
                   </div>
					<div class="col-md-3 text-right">
                    <label id="lsal" style="display: none"><b>Duration</b><span>&#42;</span></label></div>
                    <div class="col-md-3">  
                    <input type="text" name="sal" id="sal" class="form-control" placeholder="Enter Duration in Month"  pattern="[\d]+"  style="display: none" required >
                        </datalist>
                    </div>					
                </div>
				
				
				
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                   
                    
                </div>
              
            </div>

            <div class="form-group">
                <div class="row">
                    
	
                    </div> 
					
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erremail"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p id="errnationality"></p></div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                  
                 </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" style="display: none" >Post Internship</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
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

if(isset($_POST['submit']))
{
    $jid = $_POST['jid'];
    $jname = $_POST['jname'];
   
    $jdesc = $_POST['jdesc'];
    
    $post = $_POST['post'];
   
    $city = $_POST['city'];
    
    $sal = $_POST['sal'];
	$eid= $_SESSION['empname'];
	
	
    $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

    $jid = mysqli_real_escape_string($conn,$jid);
	$jname = mysqli_real_escape_string($conn,$jname);
	
	$jdesc = mysqli_real_escape_string($conn,$jdesc);
	
	$post = mysqli_real_escape_string($conn,$post);
	
	$city = mysqli_real_escape_string($conn,$city);
	
	$sal = mysqli_real_escape_string($conn,$sal);
	
	$eid = mysqli_real_escape_string($conn,$eid);

    $result = mysqli_query($conn,"insert into job values ('$jid','$jname','$jdesc','$city','$post','$sal','0','$eid')") or die("Query Failed".mysqli_error($conn));
	echo "<script>alert('Job Posted Successfully')</script>";
}else{
    echo "ok";
}

?>
