<?php

$conn = mysqli_connect('localhost','root','','payment_data') or die('connection failed');

if(isset($_POST['submit'])){

   $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state =$_POST['state'];
   $zip_code =$_POST['zip_code'];
   $name_on_card =$_POST['name_on_card'];
   $credit_card_number =$_POST['credit_card_number'];
   $exp_month =$_POST['exp_month'];
   $exp_year =$_POST['exp_year'];
   $cvv =$_POST['cvv'];

   $insert = mysqli_query($conn, "INSERT INTO `payment_table`(Full_name, Email, Address, City, State, Zip Code, Name_on_card, Exp_month, Exp_year, CVV) VALUES('$full_name','$email','$address','$city','state','zip_code','name_on_card','credit_card_number','exp_month','exp_year','cvv')") or die('query failed');

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>