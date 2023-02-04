<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="./CSS/login.css" />
  <script src="/JS/login.js"></script>
  <title>login here</title>

</head>

<body>
  <!-- section section starts  -->
  <section>
    <?php include("./FrontEnd/navbar.php "); ?>
    <div class="hero">

      &nbsp;
    </div>
    </div>
  </section>
  <br><br><br><br>

  <form action="/PHP/login.php" method="POST">
    <div class="form">
      <center>
        <h1>LOGIN HERE</h1>
        <br><br>
      </center>
      <p>Username :</p>
      <input type="text" name="" placeholder="Name Here">
      <p>Password :</p>
      <input type="password" name="" placeholder="Password Here" id="pass">
      <br><br>
      <center>
        <a href="mailto:srihrtcntr@gmail.com">Forgot password? </a>
        <br><br><br>
        <input type="submit" name="" value="LOGIN" onclick="validate()">
        <br><br><br><br>
        <a href="/FrontEnd/patient_reg.html" class="btn">Not Registered Sign Up</a>
    </div>
    </center>
    <div>
      <p id="length"></p>
    </div>
  </form>

</body>

</html>