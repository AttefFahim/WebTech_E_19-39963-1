<?php

$Err = $pErr = $npErr = $cpErr = $h = "";
$p = $np =$cp = "";
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
	header("location:LoginPage.php");
}
if(isset ($_POST['Submit'])){
	$p = $_POST['pass'];
	$np = $_POST['npass'];
	$cp = $_POST['cpass'];

if(empty($p) || empty($np) || empty($cp)){
		$Err = "Please fill up all the informations!";
	}
	else{ 
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $np)){
		$npErr =" Minimum eight characters, at least one letter, one number and one special character!";
	     }
	     else{  
		    $cu = "jb";
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
              $pn = $Info->Password;
              if($un==$name && $pn==$p){
               $cu = "";
              }
            }
		if(!empty($cu)){
          $pErr ="Password doesn't match with the current password!";
		}
		else{
	    if(!strcmp($p, $np)){
          $npErr = "New Password should not be same as the Current Password!";
	     }
	     else{
	    if(strcmp($np, $cp))
	     {
	     	$cpErr = "New Password must match with the Retyped Password!";
	      }
	      else{
	       require("user.class.php");
           $user = new User('data.json');
           $user->updateUser($name,'Password',$np);
           $h = "Password is changed.";
	      }
	  }
	   }  
	 }
	}
}
?>
