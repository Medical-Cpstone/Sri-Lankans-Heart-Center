<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>payments</title>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="./CSS/payment.css" />
</head>

<body>
  <!-- section section starts  -->
  <?php include("./FrontEnd/navbar.php "); ?>
  <br /><br /><br /><br /><br /><br /><br />

  <div class="container">
    <form action="/PHP/payment.php" method="POST">
      <div class="row">
        <div class="col">
          <h3 class="title">billing address</h3>

          <div class="inputBox">
            <span>full name :</span>
            <input type="text" placeholder="Kamala Pathirana" />
          </div>
          <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="example@example.com" />
          </div>
          <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="no. - street" />
          </div>
          <div class="inputBox">
            <span>city :</span>
            <input type="text" placeholder="colombo" />
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>state :</span>
              <input type="text" placeholder="Sri Lanka" />
            </div>
            <div class="inputBox">
              <span>zip code :</span>
              <input type="text" placeholder="81 000" />
            </div>
          </div>
        </div>
        <div class="col">
          <h3 class="title">payment</h3>

          <div class="inputBox">
            <span>cards accepted :</span>
            <img src="/Images/img.png" alt="" />
          </div>
          <div class="inputBox">
            <span>name on card :</span>
            <input type="text" placeholder="Mrs. Kamala Pathirana" />
          </div>
          <div class="inputBox">
            <span>credit card number :</span>
            <input type="number" placeholder="1111 2222 3333 4444" />
          </div>
          <div class="inputBox">
            <span>exp month : </span>
            <input type="text" placeholder="march" />
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>exp year :</span>
              <input type="number" placeholder="2025" />
            </div>
            <div class="inputBox">
              <span>CVV :</span>
              <input type="text" placeholder="123" />
            </div>
          </div>
        </div>
      </div>

      <input type="submit" value="proceed to pay" class="submit-btn" a href="/index.html" />
    </form>
    <!--link to js--->
    <script type="text/javascript " src="/JS/payment.js"></script>
  </div>
</body>

</html>