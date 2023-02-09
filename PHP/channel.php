<?php
     $con= mysqli_connect("localhost","root","","hospital");


     if(!$con){
          die("Could not connect".mysqli_error());

     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO channel_dr(doctor_name,doctor_id,branch,any_date )
          VALUES
          ('$_POST[Name]',
          '$_POST[ID]',
          '$_POST[branch]',
          '$_POST[any_date]')";
     }

     if(!mysqli_query($con,$sql)){
          die('Error'.mysqli_error($con));
          die('Error'.$mysqli_error());
     }else{
          echo 'your record added successfully';
     }
     mysqli_close($con);
?>