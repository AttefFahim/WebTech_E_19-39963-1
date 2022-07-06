<!DOCTYPE html>
<html>
<body>
 <?php
include('../Model/head.php');?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <fieldset>
 <legend> Select image to upload:</legend>
    <br> <img src="pic1.jpg" alt="eballot online pic">

  <br><input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
  <br><br><input type="submit" value="Upload Image" name="submit"></fieldset>
                        <li ><a href='AdminView.php' style= "color:red;"> Back </a></li>
  
</form><br>

<?php
include('../Model/foot.php');
?>

</body>
</html>