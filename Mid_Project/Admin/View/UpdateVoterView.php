<?php
include("../Controller/UpdateVoterCNTRL.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Voter </title>

</head>

<body>

<?php
include("../Model/head.php");
?>

<form action="" method="post" enctype="multipart/form-data">

    <center>
        <h3>Add Voter</h3>
        <table>
        <tr>
                <td>First name : </td>
                <td><input type="text" placeholder="Enter your first Name" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" placeholder="Enter your last name" name="lname"></td>
            </tr>
            <tr>
                <td>National ID : </td>
                <td><input type="text" placeholder="Enter your national id" name="nid"></td>
            </tr>
            <td>Address : </td>
                <td><input type="text" placeholder="Enter your Address" name="address"></td>
            </tr>
            <tr>
                <td>Phone : </td>
                <td><input type="text" placeholder="Enter your phone number" name="pn"></td>
            </tr>
            
                    <td>
                        <input type="submit" name="update" value="Update Voter">
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
