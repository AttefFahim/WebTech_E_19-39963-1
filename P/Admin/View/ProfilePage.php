<?php
include'../Controller/AdminProfileCNTRL.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Admin Profile</title>


</head>
<body >
           <?php include("../Model/head.php");
?> 
       
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h2 class="main-heading">Profile</h2> </legend>
        <label for="name">Name  : <?php echo $n?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : <?php echo $e?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : <?php echo $g?> </label><br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : <?php echo $db?> </label><br>
        <span class="underline">______________________</span><br><br>          
        <a href="EditProfile.php" style= "color:blue;">Edit Profile</a>
                        <li ><a href='AdminView.php' style= "color:red;"> Back </a></li>

    </fieldset>
</form>
        </div>
 </div>
<?php include("../Model/foot.php");
?> 
          
</body>
</html>