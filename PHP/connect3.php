<?php
     $con= mysqli_connect("localhost","root","","hospital");

     if(!$con){

          die("Could not connect".mysqli_connect_error());
          die("Could not connect".$mysqli_error());


     }else{
          echo 'Connection  Established Successfully';
          echo nl2br ("\n");

          $sql="INSERT INTO patient_signup(f_name,l_name,u_name,nic,gender,blood_grp,dob,email,pwd,pwd_repeat,phn_no)
          VALUES
          ('$_POST[f_name]',
          '$_POST[l_name]',
          '$_POST[u_name]',
          '$_POST[nic]',
          '$_POST[gender]',
          '$_POST[blood_grp]',
          '$_POST[dob]',
          '$_POST[email]',
          '$_POST[pwd]',
          '$_POST[pwd_repeat]',
          '$_POST[phn_no]')";
     }

     if(!mysqli_query($con,$sql)){

          die('Error'.mysqli_error($con));
          die('Error'.$mysqli_error());
     }else{
          echo 'your record added successfully';
          echo 'doctor.html';
     }
     mysqli_close($con);
?>