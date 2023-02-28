<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heart-Center</title>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!--custom css file link-->
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <!--header section start-->
  <header class=" header">
    <a href="#" class="logo"><i class="fa fa-heartbeat"></i>
      <strong>Heart</strong>Center</a>
    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#appointment">Appointment</a>
      <a href="#review">Review</a>
      <a href="#location">Location</a>
      <a href="#login">Login</a>
    </nav>
    <div id="menu-btn" class="fa fa-bars"></div>
  </header>
  <!--header section ends-->

  <!--home section starts-->
  <section class="home" id="home">
  </section>
  <div class="image">
    <img src="./IMAGES/cover.jpg" alt="">
  </div>

  <!--home section ends-->

  <!-- login section starts  -->

  <section class="services" id="login">

    <h1 class="heading"> Start <span>Here</span> </h1>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-user"></i>
        <h3>User Login</h3>
        <p>Login in order to take the best services from our website.</p>
        <a href="login.php" class="btn"> login <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-stethoscope"></i>
        <h3>Doctor Login</h3>
        <p>Login in order to give the best services from our website.</p>
        <a href="login.php" class="btn"> login <span class="fas fa-chevron-right"></span> </a>
      </div>


      <div class="box">
        <i class="fas fa-lock"></i>
        <h3>Admin Login</h3>
        <p>Only for the admins of the hospital to maintain the website.</p>
        <a href="login.php" class="btn"> login <span class="fas fa-chevron-right"></span> </a>
      </div>

    </div>

  </section>

  <!-- login section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <h1 class="heading"> <span>about</span> us </h1>
    <div class="row">
      <div class="image">
        <img src="./IMAGES/img2.jpg" alt="">
      </div>
      <div class="content">
        <h3>Sri Lankan's Heart Center The Best Heart Center,</h3>
        <p>we are giving equal facilities for everyone. so anyone can use it. Users can login without any
          payments.
          Users must log in to website, who do not have an account, should signup/register. Users log in as a doctor
          or a patient.
          <br><br>
          If someone signup as a patient they should give their details like, name, age, problem (particular disease),
          phone no, guardian name and guardians phone no etc. The doctor and patient have two
          different login systems patient can login by giving their username and password, doctor can login by givin
          their name, and doctor ID.
          <br><br>
          Therefore, joining this website may be easier for anyone. In the website it has website menu in the top,
          Home, Login, Sign in, Find a doctor, Location & Direction , Health library, Appointment & Access these are
          some options in the
          website menu.
          <br><br>
          In our healthcare service we are connecting best professional doctors for our users,
          They have years
          of experience with best qualification so we can give trustful services for users 24 hours availability is
          the most advantage in online healthcare, so patient can contact us in anytime.
        </p>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- services section starts  -->

  <section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-notes-medical"></i>
        <h3>free checkups</h3>
        <p>Check up your health condition ones a month to stay safe.</p>
        <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-ambulance"></i>
        <h3>24/7 ambulance</h3>
        <p>Call us on emergencies to protect our loved ones.</p>
        <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-user-md"></i>
        <h3>doctors</h3>
        <p>Meet our doctors to get the best services.</p>
        <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-pills"></i>
        <h3>medicines</h3>
        <p>Check the medicine availability and save your time.</p>
        <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
        <i class="fas fa-disease"></i>
        <h3>heart diseases</h3>
        <p>Find about heart diseases and be aware.</p>
        <a href="./PAGES/diseases.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

    </div>

  </section>

  <!-- services section ends -->

  <!-- appointment section starts   -->

  <section class="appointment" id="appointment">
    <h1 class="heading"> <span>appointment</span> now </h1>

    <div class="row">

      <div class="image">
        <img src="./IMAGES/img1.jpg" alt="">
      </div>

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>

        <h3>Make An Appointment</h3>
        <input type="text" name="name" placeholder="your name" class="box">
        <input type="number" name="number" placeholder="your number" class="box">
        <input type="email" name="email" placeholder="your email" class="box">
        <input type="date" name="date" class="box">
        <input type="submit" name="submit" value="appointment now" class="btn">
      </form>

    </div>

  </section>

  <!-- appointment section ends -->

  <!--location section starts here-->
  <center>
    <section class="location" id="location">

      <h1 class="heading">Google <span>Map</span></h1>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047271.311617203!2d78.46146961030456!3d7.851730318521041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1671351282358!5m2!1sen!2slk"
        width="1500" height="500" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>

    </section>
  </center>
  <!--location section ends here-->

  <!-- footer section starts -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
        <a href="about.php"> <i class="fas fa-chevron-right"></i> about </a>
        <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
        <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
      </div>

      <div class="box">
        <h3>our services</h3>
        <a href="diseases.php"> <i class="fas fa-chevron-right"></i> heart diseases </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> message us </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> Appointments </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="tel:+9411 543 1088-9"> <i class="fas fa-phone"></i> +9411 543 1088-9 </a>
        <a href="tel:+9472 7111088"> <i class="fas fa-phone"></i> +9472 7111088 </a>
        <a href="mailto:srihrtcntr@gmail.com"> <i class="fas fa-envelope"></i> srihrtcntr@gmail.com </a>
        <a href="map.php"> <i class="fas fa-map-marker-alt"></i> Colombo 3, Sri Lanka </a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com"> <i class="fab fa-facebook"></i> facebook </a>
        <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="https://www.youtube.com"> <i class="fab fa-youtube"></i> youtube </a>
        <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>

      </div>

    </div>

    <div class="credit"> created by <span>Team Medical Capstone</span> | all rights reserved </div>

  </section>

  <!-- footer section ends -->
</body>

</html>