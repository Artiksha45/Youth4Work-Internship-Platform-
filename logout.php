<?php
session_start();
if(isset($_SESSION['empname'])){
    session_unset();
    session_destroy();
    echo"<script>location.href='emplogin.php'</script>";	
}
if(isset($_SESSION['clgname'])){
    session_unset();
    session_destroy();
    echo"<script>location.href='clglogin.php'</script>";	
}
echo"<script>location.href='home.php'</script>";	

?>