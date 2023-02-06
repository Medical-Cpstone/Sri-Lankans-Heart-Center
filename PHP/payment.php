<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

$Full_name = mysqli_real_escape_string($conn, $_POST['fname']);
$Email = mysqli_real_escape_string($conn, $_POST['email']);
$Address = $_POST['adress'];
$City = $_POST['city'];
$State =$_POST['stat'];
$Zip_code =$_POST['zip_code'];
$Name_on_card =$_POST['name_on_card'];
$Credit_card_number =$_POST['credit_card_number'];
$Exp_month =$_POST['exp_month'];
$Exp_year =$_POST['exp_year'];
$cvv =$_POST['cvv'];
 
   
   if(isset($_POST['submit'])){
$insert = mysqli_query($conn, "INSERT INTO `payment_table`(fname, email, adress, city, stat, zip_code, name_on_card, credit_card_number, exp_month, exp_year, cvv) VALUES('$Full_name','$Email','$Address','$City','$State','$Zip_code','$Name_on_card','$Credit_card_number','$Exp_month','$Exp_year','$cvv')") or die('query failed');
 

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>