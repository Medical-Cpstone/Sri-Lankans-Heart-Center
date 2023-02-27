<?php
     $con= mysqli_connect("localhost","root","","hospital");

     if(!$con){
          die("Could not connect".$mysqli_error());


     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO pharmacy_table(username,medicine_name)
          VALUES
          ('$_POST[username]',
          '$_POST[medicine_name]')";
     }

     if(!mysqli_query($con,$sql)){
          die('Error'.$mysqli_error());
     }else{
          echo 'Your record added successfully';
     }
     mysqli_close($con);
?>