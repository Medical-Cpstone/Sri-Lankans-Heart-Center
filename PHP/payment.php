<?php

$conn = mysqli_connect('localhost:8080','root','','hospital') or die('connection failed');

$card_holder=$_POST['card_holder'];
$card_number =$_POST['credit_card_number'];
$exp_date =$_POST['exp_date'];
$cvc =$_POST['cvc'];
 
   
   if(isset($_POST['submit'])){
$insert = mysqli_query($conn, "INSERT INTO `payment_table`(card_holder, card_number, exp_date, cvc) VALUES('card_holder','$card_number','$exp_date','$cvc')") or die('query failed');
 

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>