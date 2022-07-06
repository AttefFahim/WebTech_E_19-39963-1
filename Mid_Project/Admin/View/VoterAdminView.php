<!DOCTYPE html>
<html>
<head>
	
	<title>Voter</title>
</head>
<body>
	<?php

include("../Model/head.php");
?>
<br>
        <form action="" method="post" enctype="multipart/form-data">
		<center>
			<table>
				<tr>
					<td><h1>Voter</h1></td>
				</tr>
                <tr>
					<td><h3><a href="AddVoterView.php">Add Voter</a></h3></td>
				</tr>
				<tr>
					<td><h3><a href="UpdateVoterView.php">Update Voter</a></h3></td>
				</tr>
				<tr>
					<td><h3><a href="RemoveVoterView.php">Remove Voter</a></h3></td>
				</tr>
				
			</table>
		</center>
		<br>
			<?php
include("../Model/foot.php");
 ?>

</body>
</html>