<?php
     $con= mysqli_connect("localhost","root","","hospital");


     if(!$con){

          die("Could not connect".mysqli_connect_error());

     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO payment_table(card_holder, card_number, exp_date, cvc)
          VALUES
          ('$_POST[card_holder]',
          '$_POST[card_number]',
          '$_POST[exp_date]',
          $_POST[cvc]',
          )";
     }

     if(!mysqli_query($con,$sql)){

          die('Error'.mysqli_error($con));
          
     }else{
          echo 'Your payment has been added successfully';
     }
     mysqli_close($con);
?>