<?php
     $con= mysqli_connect("Localhost","root","Zahra@2212","Hospital");


     if(!$con){
          die("Could not connect".mysqli_error());

     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO dr_signup(doctor_name,doctor_id )
          VALUES
          ('$_POST[doctor_name]',
          '$_POST[doctor_id]')";
     }

     if(!mysqli_query($con,$sql)){
          die('Error'.mysqli_error());
     }else{
          echo 'your record added successfully';
     }
     mysqli_close($con);
?>