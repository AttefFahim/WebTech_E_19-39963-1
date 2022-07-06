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
    <title>DashBoard</title>

</head>
<body >
    
            

        <h1> Welcome To Our Admin: <?php echo $name?> </h1>
                    <ul>
                        <li ><a href='Dashboard.php' style= "color:red;">Dashboard </a></li>
                        <li ><a href='AdminView.php' style= "color:blue;">Admin </a></li>
                        <li ><a href='VoterAdminView.php' style= "color:blue;">Voter </a></li>
                        <li ><a href='EcAdminView.php' style= "color:blue;">Election Commission </a></li>
                        <li ><a href='VotingTimeView.php' style= "color:blue;">Voting Time </a></li>
                        <li ><a href='ResultAdminView.php' style= "color:blue;">Publish Result </a></li>
                    </ul>        	

        
    
 
<?php include("../Model/foot.php");
?>           
</body>
</html>