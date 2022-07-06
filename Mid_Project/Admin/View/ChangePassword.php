<?php
include'../Controller/AdminPassChangeCNTRL.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Change Password</title>

</head>
<body>


            <?php
include('../Model/head.php');
?>
        
        
     <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset>
        <legend> <h3 class="main-heading">Change Password</h3> </legend>
        <label for="pass"> <b>Current Password :</b> </label>
        <input type="text" name="pass"><span style="color: red; font-size: 15px">*<?php echo $pErr?><br></span>
       <br> <label for="npass"style="color: green"> <b>New Password :</b> </label>
        <input type="text" name="npass"><span style="color: red; font-size: 15px">*<?php echo $npErr?><br></span> 
       <br> <label for="cpass" style="color: red"> <b>Retype New Password :</b> </label>
        <input type="text" name="cpass"><span style="color: red; font-size: 15px">*<?php echo $cpErr?><br></span>     
        <span class="underline">______________________</span><br><br> 
        <label style="color: red; font-size: 15px"><?php echo $Err ?></label>  <br>
        <input type="submit" name="Submit" value="Submit">
                        <li ><a href='AdminView.php' style= "color:red;"> Back </a></li>

    </fieldset>
    <h3><?php echo $h ?></h3>
    </form> 
                        

 
<?php
include('../Model/foot.php');
?>
</body>
</html>