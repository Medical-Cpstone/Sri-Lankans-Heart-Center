<?php

$conn = mysqli_connect('localhost','root','','hospital') or die('connection failed');

if(isset($_POST['submit'])){

   $user_name = mysqli_real_escape_string($conn, $_POST['username']);
   $medicine_name = mysqli_real_escape_string($conn, $_POST['medicine_name']);
   $insert = mysqli_query($conn, "INSERT INTO `pharmacy`(username, medicine_name')
   VALUES('$user_name','$medicine_name')") or die('query failed');

   if($insert){
      $message[] = 'payment made successfully!';
   }else{
      $message[] = 'payment failed';
   }

}
?>