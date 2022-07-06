<?php
$nameErr = $passErr = $l = "";

if(isset ($_POST['Submit'])){
	$n = $_POST['uname'];
	$p = $_POST['pass'];
	if(empty($n)){
		$nameErr = "Please Enter Your Name";
	}
	else{
		if(strlen($n)<2){
	     		$nameErr = "User Name should contains at least two characters";
	     }
	    else{
	     	if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
		$nameErr =" User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
	     	}
	     }
	}
	if(empty($p)){
		$passErr = "Please Enter Password";
	}
	
	else{
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $p)){
		$passErr =" Minimum eight characters, at least one letter, one number and one special character";
	     }
         else{
             $cu = $cp = "jb";
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
              if($un==$n){
               $cu = "";
              }
            }
            foreach ($info as $Infos) {
              $pn = $Infos->Password;
              if($pn==$p){
               $cp = "";
              }
            }            
            if(empty($cu) && empty($cp)){
                session_start();
             $_SESSION['uname']  = $n; 
             if(isset($_POST['remember'])){
              setcookie("uname", $n, time()+86400*30);
              setcookie("pass", $p, time()+86400*30);
             }
            header("location:DashBoard.php");
             }
        else{
          $l = "Invalid User Name Or Password!";
         }
        }
	}

}

	?>