<?php
include("../Controller/UpdateEcCNTRL.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Update Election Comission</title>
</head>
<body>

<?php
include("../Model/head.php");
?>

<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Update Election Comission</h1>
			<table>
				<tr>
					<td>First Name :</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Last Name :</td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>EC Area :</td>
					<td><input type="radio" name="area">Dhaka</td>
					<td><input type="radio" name="area">Gazipur</td>
				</tr>
				<tr>
					<td><input type="submit" name="update" value="Update EC"></td>
				</tr>
			</table>
		</center>
		<br>
						<?php
include("../Model/foot.php");
 ?>

</body>
</html>