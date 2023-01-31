<?php
     $con= mysqli_connect("Localhost","root","Zahra@2212","dr_channel");


     if(!$con){
          die("Could not connect".mysql_error());

     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO chennel_dr(doctor_name,doctor_id,hospital_name,any_date )
          VALUES
          ('$_POST[doctor_name]',
          '$_POST[doctor_id]',
          '$_POST[hospital_name]',
          '$_POST[any_date]')";
     }

     if(!mysqli_query($con,$sql)){
          die('Error'.mysql_error());
     }else{
          echo 'your record added successfully';
     }
     mysqli_close($con);
?>
