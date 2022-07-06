<?php
include "../Controller/LoginAdminCNTRL.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

</head>
<body>

    <div class="full-page">
        <div class="sub-page">
<?php
include('../Model/head.php');
?>
  
            </div>


	            <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                           
    <form class="login-form" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset>
        <legend> <h3 class="main-heading">Login</h3> </legend>
        <label><span style="color: red"><?php echo $l ?></span></label><br><br>
        <label for="uname"> <b>User Name :</b> </label>
        <input type="text" name="uname" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"><span style="color: red">*<br><?php echo $nameErr?><br></span><br>
        <label for="pass"> <b>Password :</b> </label>
        <input type="password" name="pass"value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>"><span style="color: red">*<br><?php echo $passErr?><br></span><br>    
        <span class="underline">____________________________________________________________________</span><br><br>
        
        <input type="checkbox" name="remember" value =1 > <label for="remember"> Remember me</label><br>   
        <input type="submit" name="Submit" value="Submit">
        <a href="ForgotPassword.php">Forgot Password?</a>
    </fieldset>
    </form> 
    </div>
 </div>
 </div>
</div>
<?php
include('../Model/foot.php');
?>
  
</body>
</html>