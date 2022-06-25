<?php
session_start();
if(isset( $_SESSION['uname'])){
	
	header("location:PublicHome.php");
}
else{
	session_destroy();
	header("location:PublicHome.php");
}
?>