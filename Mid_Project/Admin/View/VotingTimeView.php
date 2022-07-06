<!DOCTYPE html>
<html>
<head>
	
	<title>Voting Time</title>
</head>
<body>
	<?php

include("../Model/head.php");
?>
<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Voting Time</h1>
			<table>
				<tr>
					<td>
						<label for="appt">Start Voting :</label>
                        <input type="time" id="appt" name="appt">to
                        <input type="time" id="appt" name="appt">
                        <input type="submit">
					</td>
				</tr>
				<tr>
					<td>
						<label for="appt">Pause Voting :</label>
                        <input type="time" id="appt" name="appt">to
                        <input type="time" id="appt" name="appt">
                        <input type="submit">
					</td>
				</tr>
			</table>
		</center>
		<br>
							<?php
include("../Model/foot.php");
 ?>

</body>
</html>