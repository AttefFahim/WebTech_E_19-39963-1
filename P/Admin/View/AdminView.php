<?php
include("../Model/head.php");

$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
	header("location:LoginPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>AdminView</title>

</head>
<body >
    
            

        <h1> Welcome To Our Admin: <?php echo $name?> </h1>
                    <ul>
                       

                        <li ><a href='ProfilePage.php' style= "color:blue;">Admin Profile  </a></li>
                        <li ><a href='EditProfile.php' style= "color:blue;">Edit Profile  </a></li>
                        <li ><a href='form.php' style= "color:blue;">Change Profile Picture </a></li>
                        <li ><a href='ChangePassword.php' style= "color:blue;">Change Password  </a></li>
                        <li ><a href='RegistrationPage.php' style= "color:blue;">Admin Registrtion  </a></li>
                        <li ><a href='DashBoard.php' style= "color:red;"> Back </a></li>


                        
                    </ul>        	

        
    
 
<?php include("../Model/foot.php");
?>           
</body>
</html>