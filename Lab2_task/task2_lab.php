<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $genderErr = $degErr = $blgroup = "";
$name = $email = $dob =  $gender = $deg = $blgroupErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = $_POST["name"];
    $pattern = "/^[a-z]+([a-z]|[0-9]|\.|-)*/i";
    // check if name only contains letters and whitespace
    if (!preg_match($pattern,$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    else if(str_word_count($name)<2){

      $nameErr= "Name field at least two words";
      $name = " ";
    }

  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
    }
  }

  if (empty($_POST["Date"])) {
    $dobErr = "*Date of birth is required";
  }
   else {
    $dob = $_POST["Date"];
    $d = explode("-",$dob);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];
    //yyyy-mm-dd

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=1998 && $yy>=1953)){
      $dobErr = "*Invalid date of birth";
      $dob = "";
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
    
  }

  if (empty($_POST["degree"])) {
    $degErr = "Degree is required";
  } 
  else{
    $deg = $_POST["degree"];
    if(count($deg)<2){
      $degErr = "At least two of degree must be selected";
    }
  }
 if (empty($_POST["blood"])) {
    $blgroupErr = "Blood group is required";
  } else {
    $blgroup = $_POST["blood"];
  }
}


?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth:<input type="date" name="Date" value="<?php echo  $dob ;?>">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

   Degree:
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="HSC") echo "checked";?>value="HSC">HSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="Bsc") echo "checked";?>value="Bsc">Bsc
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="Msc") echo "checked";?>value="Msc">Msc
  <span class="error">* <?php echo $degErr;?></span>
  <br><br>

  Blood Group:
  <select name="blood">
      <option value=""></option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      </select>
  <span class="error">* <?php echo $blgroupErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<b>NAME::</b>" . $name;
echo "<br>";
echo "<b>Email Address::</b>" . $email;
echo "<br>";
echo "<b>Date Of Birth::</b>" . $dob;
echo "<br>";
echo "<b>Gender::</b>" . $gender;
echo "<br>";
if(!empty($deg)){
    if(count($deg) != 0){
      echo "<b>Degree: </b>";
      foreach($deg as $val){
      echo $val."; ";
      }
    }
  }
echo "<br>";
echo "<b>Blood Group::</b>" . $blgroup;

?>

</body>
</html>