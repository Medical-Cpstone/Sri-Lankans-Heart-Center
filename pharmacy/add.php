<?php

$conn = mysqli_connect('localhost','root','','test01') or die('connection failed');

if(isset($_POST['submit'])){

   $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
   $medicine_name = mysqli_real_escape_string($conn, $_POST['medicine_name']);
   $insert = mysqli_query($conn, "INSERT INTO `pharmacy`(user_name, medicine_name');

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>