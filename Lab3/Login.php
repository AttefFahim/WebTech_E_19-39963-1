<!DOCTYPE html>
 <head>
       <style type="text/css">
    .red{
      color: red;
    }
  </style>
 </head>
 <body>

  <?php
  $name = $password ="" ;
  $nameErr = $passErr = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
            if (str_word_count ($name) < 2){
                $nameErr = " User Name must contain at least two (2) characters";
                }
            }


  if (empty($_POST["Pass"]))
  {
   $passErr = "Insert your password";
   }

  else
  {
   $arr = str_split($password );
   if(strlen($password) >= 8 )
  {
   for ($i=0; $i < strlen($password) ; $i++)
  {
   if( $arr[$i]=="@" or $arr[$i]=='#' or $arr[$i]=='$' or $arr[$i]=='%')
   {
  
   $a=1;
   break;
   }
  }

  if($a==0)
  {
   $passErr = "Your password must include special charectar !)(*$@#$^&?/";
   }
  }

  else
   {
    $passErr= "Your password must contain atleast 8 Charecter";
    }
   }

  }
?>

    <div class="container" style="width: 350px;">
   <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">

   <fieldset>

    <legend><h3>LOGIN</h3></legend>

    <table>
    <tr>
    <td ><label>User Name</label></td>
    <td> <input type="text" name="name"><span class="red"> *<?php echo $nameErr;?></span></td>
    </tr>

    <tr>
    <td ><label>Password</label></td>
    <td> <input type="text" name="Pass"><span class="red"> *<?php echo $passErr;?></span></td>
    </tr>
    </table>
 <hr>
    <table>
    <tr>
    <td>
    <input type="checkbox" name="Remember_Me">
    <label >Remember Me </label>
    </td>
    </tr>
    </table>

    <br>
   <input type="submit"> 
   <a href ="" > Forgot Password?</a>

  </fieldset>

  </form>
 </body>
</html>