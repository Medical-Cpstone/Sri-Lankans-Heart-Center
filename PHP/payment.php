<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

$full_name = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = $_POST['adress'];
$city = $_POST['city'];
$state =$_POST['stat'];
$zip_code =$_POST['zip_code'];
$name_on_card =$_POST['name_on_card'];
$credit_card_number =$_POST['credit_card_number'];
$exp_month =$_POST['exp_month'];
$exp_year =$_POST['exp_year'];
$cvv =$_POST['cvv'];
 
   
   if(isset($_POST['submit'])){
$insert = mysqli_query($conn, "INSERT INTO `payment_table`(fname, email, adress, city, stat, zip_ode, name_on_card, credit_card_number, exp_month, exp_year, cvv) VALUES('$full_name','$email','$address','$city','$state','$zip_code','$name_on_card','$credit_card_number','$exp_month','$exp_year','$cvv')") or die('query failed');
 

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>