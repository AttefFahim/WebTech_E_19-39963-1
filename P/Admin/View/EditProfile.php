<?php
include'../Controller/EditAdminProfileCNTRL.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Edit Profile</title>

</head>
<body >
    <?php
include('../Model/head.php');
?>
        
        
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">Edit Profile</h3> </legend>
        <label for="name">Name  : </label><input type="text" name="name" value = "<?php echo $n?>" ><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : </label><input type="text" name="email" value = "<?php echo $e?>" ><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : </label>        
        <input type="radio" name="gender" value="Male" required <?php if($g=="Male"){echo "checked";}?> >Male
        <input type="radio" name="gender" value="Female" required <?php if($g=="Female"){echo "checked";}?> >Female
        <input type="radio" name="gender" value="Other" required <?php if($g=="Other"){echo "checked";}?> >Other<br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : </label><input type="date" name="dob" value = "<?php echo $db?>" ><br>
        <span class="underline">______________________</span><br><br>          

        <input type="submit" name="Submit" value="Submit">
    </fieldset>
</form>
        </div>
 </div>
<?php
include('../Model/foot.php');
?>        
</body>
</html>