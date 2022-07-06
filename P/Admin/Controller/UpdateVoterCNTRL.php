<?php
    session_start();

    if(isset($_POST["update"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["nid"]) || empty($_POST["address"]) || empty($_POST["pn"]))
        {
            echo "All information required";
        }

        
   

    }

    else
    {
       
    }
?>