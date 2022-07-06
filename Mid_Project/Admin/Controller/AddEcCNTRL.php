<?php
    session_start();

    if(isset($_POST["add"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["phone"]) || empty($_POST["pass"]) || empty($_POST["cpass"])|| empty($_POST["area"]))
        {
            echo "All information required";
        }

        else
        {
            echo "EC Added Successfully";
        }
    }

    else
    {
       
    }
?>