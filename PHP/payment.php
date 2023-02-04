<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

if(isset($_POST['submit'])){

   $full_name = mysqli_real_escape_string($conn, $_POST['Fname']);
   $email = mysqli_real_escape_string($conn, $_POST['Email']);
   $address = $_POST['Address'];
   $city = $_POST['City'];
   $state =$_POST['State'];
   $zip_code =$_POST['Zip_code'];
   $name_on_card =$_POST['Name_on_card'];
   $credit_card_number =$_POST['Credit_card_number'];
   $exp_month =$_POST['Exp_month'];
   $exp_year =$_POST['Exp_year'];
   $cvv =$_POST['CVV'];

   $insert = mysqli_query($conn, "INSERT INTO `payment_table`(Fname, Email, Address, City, State, Zip_ode, Name_on_card, Exp_month, Exp_year, CVV) VALUES('$full_name','$email','$address','$city','$state','$zip_code','$name_on_card','$credit_card_number','$exp_month','$exp_year','$cvv')") or die('query failed');

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>