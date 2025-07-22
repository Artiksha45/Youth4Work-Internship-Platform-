<?php
	session_start();
	if(isset($_POST['jid']) && isset($_SESSION['username']))

		{
		
			

	 $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
			
		$cname = $_POST['cname'];
		$jid = $_POST['jid'];
		$jid2 = $_POST['jid2'];
		$sid = $_SESSION['username'];
		$stuname = $_POST['stuname'];
		$clgcode = $_POST['clgcode'];

			
		


		$result = mysqli_query($conn,"insert into jobapplied values ('$sid','$stuname','$jid','$jid2','$cname','$clgcode')".mysqli_error($conn));
		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='studentlogin.php'</script>";



                $query = "select * from job";
			
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
						$old=$row['uname'];
					}
				}
		
		
		$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected.");
		$username=$_SESSION['username'];
		$new=$old.','.$username;
		if($result=mysqli_query($link,"update job set uname='$new' where jid='".$_POST["jid2"]."'") or die("failed to query database".mysqli_error($link))){
		
				
			echo "JOB APPLIED SUCCESSFULLY";
			}else {
			echo "SOMETHING WENT WRONG";

			

		}
	

	
		}
	header("location:studentlogin.php");

?>