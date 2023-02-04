<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Location</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <!-- custom css file link  -->
  <link rel="stylesheet" href="./CSS/map.css" />
</head>

<body>
  <!-- header section starts  -->
  <section>
    <?php include("./FrontEnd/navbar.php "); ?>
    <div class="hero">&nbsp;</div>
  </section>
  <br /><br /><br /><br /><br /><br />

  <!-- header section ends  -->
  <div class="container">
    <br />
    <h1>Google Map On Website</h1>
    <br /><br />

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047271.311617203!2d78.46146961030456!3d7.851730318521041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1671351282358!5m2!1sen!2slk"
      width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <footer>
    <p class="copyright">
      ©2022 All rights reserved | Made by Team Medical Capstone
    </p>
  </footer>
</body>

</html>