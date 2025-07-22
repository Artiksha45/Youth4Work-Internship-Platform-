<?php

if(isset($_POST["submit"])){
    $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
$id = $_GET["id"];
$filename =  $_FILES["certificate"]["name"];
$tempname =  $_FILES["certificate"]["tmp_name"];
$folder = "certificates/".$filename;
move_uploaded_file($tempname,$folder);

$sql = "UPDATE certificaterequest SET certificate='$folder', status='1' WHERE id=$id;";

if (mysqli_query($conn, $sql)) {
echo "<script>alert('Certificate uploaded successfully')</script>"; 
} else {
echo "Error uploading certificate: " . mysqli_error($conn);
}

}



?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Upload certificate</title>
  </head>
  <body>
<div class="container mt-5">
    <h2>Upload Certificate</h2>
  <form method="POST" action="" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Student Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"value="<?php echo $_GET["sn"]; ?>" disabled>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Selecte Certificate</label>
    <input type="file" name="certificate" class="form-control-file" id="exampleFormControlFile1" required>
  </div>
  <input class="btn btn-primary" name="submit" type="submit" value="Upload">
</form>
 
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>