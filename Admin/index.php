<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/animations.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/admin.css">

  <title>Dashboard</title>
  <style>
  .dashbord-tables {
    animation: transitionIn-Y-over 0.5s;
  }

  .filter-container {
    animation: transitionIn-Y-bottom 0.5s;
  }

  .sub-table {
    animation: transitionIn-Y-bottom 0.5s;
  }
  </style>

</head>

<body>
  <?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    //import database
    include("../connection.php");
    
    ?>
