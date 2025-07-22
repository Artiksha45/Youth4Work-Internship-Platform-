

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
        <h1><a href="#intro" class="scrollto" >Student Profile</a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
         
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	
    <div style="text-align:center; margin-top:20px;">
       
		
    <?php 
    $stuname = $_GET["u"];
    
        $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
				
                $query = "select * from student where username='$stuname'";

                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <script src="https://kit.fontawesome.com/a24879a822.js" crossorigin="anonymous"></script>

<div class="wrapper">
  <div class="profile">
    <div class="profile_img_info">         
             <div class="img">
                <img src="https://images.unsplash.com/photo-1509259305526-037fbbf698fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGF1c3RyYWxpYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=400&q=60"alt="profile_pic">     
             </div>
             <div class="info">
                  <p class="name"><?php echo $row["sname"]; ?></p>
               <p class="place"><span><i class="fas fa-phone-alt"></i></span>
               <?php echo $row["mobile"]; ?>
                  </p>
             </div>
        </div>
    <div class="profile_skills">
            <div class="skills">
                <p>Details</p>
                <ul>
                  
                      <li><span class="title">10 th Marks:  <?php echo $row["10th_marks"]; ?></span><li>
                
                   
                      <li> <span class="title">12 Th Marks:  <?php echo $row["12th_marks"]; ?></span></li>
                       <li><span class="title">Gender:  <?php echo $row["gender"]; ?></span></li>
                       <li><span class="title">Collage Name : 
<?php
      $clgcode = $row["clgcode"];
                       $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
				
        $query = "select * from collage where instituecode='$clgcode'";

        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row1 = $result->fetch_assoc()) {

                echo $row1["name"];
            }
          }
        
?>
                       </span></li>
                       <li><span class="title"><a href="<?php echo $row["resume"]; ?>">Click Here to view Resume</a> </span></li>
                   
                </ul>
            </div>
          
        </div>
  </div>
  
  
</div>

                                <?php
                    }
                  }
                
                ?>
		</div>
    </div>
	
	<div class="container">
    



    
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
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
  list-style: none;
  
}
body{
  background: #94bbe9;
  color: #555555;
}

.wrapper{
   width: 650px;
   height: auto;
   position: absolute;
   top: 60%;
   left: 57%;
   
   transform: translate(-50%,-50%);
  display: flex;
}
.wrapper .profile{
   width: 400px;
   margin-right: 25px;
}
.wrapper .profile .profile_img_info{
   display: flex;
   background: #fff;
   border-radius: 10px;
   margin-bottom: 25px;
}
.wrapper .profile .profile_img_info .img{
  width: 125px;
}

.wrapper .profile .profile_img_info .img img{
  width: 100%;
  display: block;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}
.wrapper .profile .profile_img_info .info{
    width: calc(100% - 125px);
    padding: 40px;
}

.wrapper .profile .profile_img_info .info .name{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
}

.wrapper .profile .profile_img_info .place{
    font-weight: 300;
}
.wrapper .profile .profile_skills{
  background: #fff;
  border-radius: 10px;
  padding: 25px;
}

.wrapper .profile .profile_skills .skills{
  padding-bottom: 20px;
  border-bottom: 1px solid #cccccc;
}

.wrapper .profile .profile_skills .skills p{
  text-transform: uppercase;
  font-weight: 700;
  font-size: 14px;
  margin-bottom: 10px;
}

.wrapper .profile .profile_skills .skills ul li{
  font-size: 30px;
  margin-bottom: 5px;
}

.wrapper .profile .profile_skills .skills ul li .fab{
  width: 40px;
}
.wrapper .profile .profile_skills .tags_wrap{
  padding-top: 20px;
}

.wrapper .profile .profile_skills .tags_wrap span.tag{
  background: #e4e9ef;
  padding: 10px 15px;
  display: inline-block;
  border-radius: 10px;
  margin: 5px;
  font-size: 14px;
}

.wrapper .profile_counts{
  background: #fff;
  border-radius: 10px;
  padding: 25px;
  width: 175px;
}

.wrapper .profile_counts .profile_counts_wrap{
  padding: 30px 0;
  border-bottom: 1px solid #cccccc;
}
.wrapper .profile_counts .profile_counts_wrap:first-child{
  padding-top: 0;
}
.wrapper .profile_counts .profile_counts_wrap:last-child{
  padding-bottom: 0px;
  border-bottom: 0px;
}

.wrapper .profile_counts .profile_counts_wrap .item{
    padding: 20px 10px;
    text-align: center;
    border-radius: 10px;
    cursor: pointer;
    transition: all .2s ease;
}
.wrapper .profile_counts .profile_counts_wrap .item:hover{
  background: #e4e9ef;
}

.wrapper .profile_counts .profile_counts_wrap .item .fas{
  font-size: 30px;
  margin-bottom: 20px;
}
.wrapper .profile_counts .profile_counts_wrap .item .title{
  font-size: 14px;
}
</style>