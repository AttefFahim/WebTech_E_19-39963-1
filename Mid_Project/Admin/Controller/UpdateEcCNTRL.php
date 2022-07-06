<?php
    session_start();

    if(isset($_POST["update"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["phone"]) || empty($_POST["area"]))
        {
            echo "All information required";
        }

        else
        {
            echo "EC Updated Successfully";
        }

         }

    else
    {
       
    }
?>