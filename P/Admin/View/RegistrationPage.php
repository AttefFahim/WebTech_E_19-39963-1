<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>

</head>
<body>
<?php

  
    $nameErr=$emailErr=$unameErr=$passErr=$cpassErr=$genderErr=$dateErr="";
    $name=$email=$uname=$pass=$cpass=$gender=$date=$success="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name"]))
    {
      $nameErr="Name is required";
    }
    else
    {

      $name=$_POST["name"];
      if(!preg_match("/^[a-zA-Z- ]*$/",$name))
      {
        $nameErr="Must start with a letter. Can contain a-z, A-Z, period, dash only";
        $name="";
        
      }
    }
    if(empty($_POST["email"]))
    {
      $emailErr="Email is required";
    }
    else
    {

      $email=$_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="Invalid email format";
        $email="";
      }
    }
    
    if(empty($_POST["uname"]))
    {
      $unameErr="Username is required";
    }
    else
    {
 
      $uname=$_POST["uname"];
      if(strlen($_POST["uname"])<2)
      {
        $unameErr="User Name must contain at least two (2) characters";
        $uname="";
      }

    }
   

    if(empty($_POST["pass"]))
    {
      $passErr="Password is required";
    }
    else
    {
 
      $pass=$_POST["pass"];
      if(strlen($_POST["pass"])<8)
      {
        $passErr="Password must not be less than eight (8) characters";
        $pass="";
        
      }
        else if(!preg_match("/\W/",$pass))
      {
        $passErr="Password must contain at least one of the special characters";
        $pass="";
        
      }
      
      
    }
    if(empty($_POST["cpass"]))
    {
      $cpassErr="Confirm Password is required";
    }
    else
    {
 
      $pass3=$_POST["cpass"];
      if($_POST["cpass"]!=$_POST["cpass"])
      {
        $cpassErr="Password and confirm password are not matched";
        $cpass="";

      }
    }
    
    if(empty($_POST["gender"]))
    {
      $genderErr="Gender is required";
      $gender="";
    }
    else
    {
 
      $gender=$_POST["gender"];
    }
    if(empty($_POST["date"]))
    {
      $dateErr="Date of birth  is required";
      $date="";
    }
    else
    {
       $date=$_POST["date"];
      
    }
    

    
   

  


$success = "";
if(isset ($_POST['Submit'])){
 $data = array(
         "Name" =>$_POST['name'],
         "Email" =>$_POST['email'],
         "User_Name" =>$_POST['uname'],
         "Password" =>$_POST['pass'],
         "Gender" =>$_POST['gender'],
         "Date_of_Birth" =>$_POST['dob'],
        
          );
                 require("user.class.php");
            $user = new User('Data.json');
            $user->insertNewUser($data);
            $success = "Your account has been created. Please go to login page.";
}

else if(isset ($_POST['Reset'])){
        $_POST['name'] = "";
        $_POST['email'] = "";
        $_POST['uname'] = "";
        $_POST['pass'] = "";
        $_POST['cpass'] = "";
        $_POST['gender'] = "";
        $_POST['dob'] = "";  
}}

?>  

  
     <form method= "post" class="register-form"  action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">REGISTRATION</h3> </legend>
        <label for="name">Name  : </label><br><span><?php echo $nameErr;?></span>
        <input type="text" name="name"><br>
        <span class="underline">________________________________</span><br><br> 
        <label for="email">Email  : </label><span><?php echo $emailErr;?></span><br>
        <input type="text" name="email"><br>
        <span class="underline">________________________________</span><br><br> 
        <label for="uname">User Name  : </label><span><?php echo $unameErr;?></span><br>
        <input type="text" name="uname"><br>
        <span class="underline">________________________________</span><br><br> 
        <label for="pass">Password  : </label><br><span><?php echo $passErr;?></span>
        <input type="text" name="pass"><br>
        <span class="underline">________________________________</span><br><br> 
        <label for="cpass">Conform Password  : </label><br><span><?php echo $cpassErr;?></span><br>
        <input type="text" name="cpass"><br>
        <span class="underline">________________________________</span><br><br>
    <fieldset>
        <legend> Gender </legend>
        <input type="radio" name="gender" value="Male" >Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other<br><span><?php echo $genderErr;?></span>
    <br>
    </fieldset>
        <span class="underline">________________________________</span><br><br>
        <fieldset>
        <legend> Date of Birth </legend>
        <input type="date" name="dob"><br>
      <span><?php echo $dateErr?></span>
    </fieldset>
        <span class="underline">________________________________</span><br><br>
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset"><br>
        <label><?php echo $success ?></label>
                        <li ><a href='AdminView.php' style= "color:red;"> Back </a></li>
        
    </fieldset>
</form>
    
              
           
  <?php
include('../Model/foot.php');
?>
</body>
</html>