<?php
	session_start();
  $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");
	if(!isset($_SESSION['empname'])){
    header("location:emplogin.php");
	}
	
	$username=$_SESSION['empname'];
	
  
  if(isset($_POST['examsubmit'])) {
    $topiccourse = $_POST['topiccourse'];
    $examlink = $_POST['examlink'];
    $result = mysqli_query($conn,"insert into exam (id,course,examlink) values  (NULL,'$topiccourse','$examlink')") or die("Query Failed".mysqli_error($conn));
    echo "<script>alert('Exam uploaded Successfully');</script>";




}
if(isset($_POST['submit']))
{
    $topicname = $_POST['topicname'];
    $topiclink = $_POST['topiclink'];
    $topiccourse = $_POST['topiccourse'];
    $topicdesc = $_POST['topicdesc'];

   
	

    $result = mysqli_query($conn,"insert into lectures (id,empname,jpost,topicname,topicdesc,topiclink) values  (NULL,'$username','$topiccourse','$topicname','$topicdesc','$topiclink')") or die("Query Failed".mysqli_error($conn));
	if ($result) {
        echo "<script>alert('Lecture uploaded Successfully')</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }
}else{
    echo "ok";
}

if(isset($_POST['delete'])){

    $id = $_POST["id"];
     $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
    $sql = "DELETE FROM lectures WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Lecture Deleted Successfully')</script>";
    } else {
                echo "<script>alert('Lecture Not  Deleted ')</script>";
      
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
 
</head>
<body id="back">
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h4><a href="#intro" class="scrollto" >Student Querys</a></h4>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li><a href="empwelcome.php">Company Home</a></li>
          <li><a href="jobpost.php">Post A Internship</a></li>
          <li  class="menu-active"><a href="uploadlectures.php">Upload Lectures</a></li>
          <li><a href="empjobstatus.php">Internship Application Status</a></li>
          <li ><a href="jobappliedlist.php">Applied List</a></li>
          <li><a href="stuqueryes.php">Student Querys</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
  <style>
        /* Styling for the popup */
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            z-index: 9999;
        }
    </style>
  <div id="popupForm" class="popup">
        <h3>Upload Exam</h3>
        <form id="examForm" method="POST" action="">
            <label for="selectSubject">Subject:</label>
            <select name="topiccourse" style="height:35px;" class="form-control" id="exampleFormControlSelect1">
                <option value="Network engineering">Network engineering</option>
                <option value="Game development">Game development</option>
                <option value="Artificial intelligence/machine learning">Artificial intelligence/machine learning</option>
                <option value="Web development">Web development</option>
                <option value="Mobile application development">Mobile application development</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Software Development">Software Development</option>
            </select>
            <br><br>
            <label for="examLink">Exam Link:</label>
            <input type="text" name="examlink" id="examLink" required>
            <br><br>
            <input class="btn btn-primary" name="examsubmit" type="submit" value="Submit">
        </form>
    </div>
    <script>
  document.addEventListener("DOMContentLoaded", function() {
    var uploadExamLink = document.getElementById("uploadExamLink");
    var popupForm = document.getElementById("popupForm");
    var examForm = document.getElementById("examForm");

    uploadExamLink.addEventListener("click", function(event) {
        event.preventDefault();
        popupForm.style.display = "block";
    });

   
});

</script>
    <div style="text-align:center; margin-top:20px;">
<div class="container">
    <form method="post">
    <h2><b>Upload Lectures Or <u><a href="#" id="uploadExamLink">Upload Exam</a></u></b></h2>

  <div class="form-group">
    <label for="exampleFormControlInput1">Topic Name</label>
    <input type="text" name="topicname" class="form-control" id="exampleFormControlInput1" placeholder=" " required>
  </div>
  <div class="form-group">
 
    <label for="exampleFormControlInput1">Topic Link</label>
    <input type="text" name="topiclink" class="form-control" id="exampleFormControlInput1" placeholder=" " required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Course</label>
    <select name="topiccourse" style="height:35px;" class="form-control" id="exampleFormControlSelect1">
    <option value="Network engineering">Network engineering</option>
    <option value="Game development ">Game development </option>
    <option value="Artificial intelligence/machine learning">Artificial intelligence/machine learning</option>
    <option value="Web development ">Web development </option>
    <option value="Mobile application development">Mobile application development</option>
    <option value="Cybersecurity">Cybersecurity</option>
    <option value="Software Development">Software Development</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details about Lectures</label>
    <textarea class="form-control" name="topicdesc" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
 
  <input class="btn btn-primary" name="submit" type="submit" value="Upload">
</form>

	</div>
    
    <div class="container">
        <h2><b> Recent Uploads </b></h2>




    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic Name</th>
      <th scope="col">Topic Course</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from lectures where empname='$username'";
              
                $result = $conn->query($query);
                $i=0;
                if ($result->num_rows > 0) {
                   
                  while($row = $result->fetch_assoc()) {  
                      $i=$i+1;
                  ?>
 <!-- Table Row -->
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row["topicname"]; ?></td>
    <td><?php echo $row["jpost"]; ?></td>
  
    <td><a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#deleteModal<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>
            <div class="modal-footer">
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

   <?php  } 

}?>
  </tbody>
</table>
    </div>
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