<?php
    session_start();

    if(isset($_POST["add"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["nid"]) || empty($_POST["address"]) || empty($_POST["pn"])|| empty($_POST["pass"])|| empty($_POST["cpass"]))
        {
            echo "All information required";
        }

        
   

    }

    else
    {
       
    }
?>