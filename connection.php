<?php

    $database= new mysqli("localhost","root","","HeartCenter");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
