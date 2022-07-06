<?php
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
            if($un==$name){
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }

if(isset ($_POST['Submit'])){
            require("user.class.php");
            $user = new User('data.json');
            $user->updateUser($name,'Name',$_POST['name']);
            $user->updateUser($name,'Email',$_POST['email']);
            $user->updateUser($name,'Gender',$_POST['gender']);
            $user->updateUser($name,'Date_of_Birth',$_POST['dob']);
            header("location:ProfilePage.php");
}            
?>