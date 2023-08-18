<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">


  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
  <title>contact us</title>
</head>

<body>



  <section class="head-main width-p">

    <?php
include "header.php";
?>

    <div class="head-maintext-box">

      <div class="small-head-text">

        <h1>contact us</h1>
        <img src="./assets/img/dustbin-man-222222.png" alt="">

      </div>
    </div>




  </section>
  <section class="contact-page-form">



    <div class="contact-form">
      <h1>Contact us</h1>

      <p>
        Nulla facilisi. Mauris et interdum nisi. Sed scelerisque, arcu vel faucibus tristique,
        purus nisi pretium mi, sit amet varius nisl nunc eu augue.
      </p>

      <div class="input-info">
        <label for="nameInput"></label>
        <input type="text" id="nameInput" placeholder="Your name">
        <label for="emailInput"></label>
        <input type="email" id="emailInput" placeholder="Your Email Address...">
      </div>


      <div>
        <label for="messageInput"></label>
        <textarea id="messageInput" rows="3" placeholder="Enter your message"></textarea>
      </div>

      <div class="submit-box">

        <button class="contact-main-button" onclick="submitForm()">Submit >></button>
      </div>


    </div>
    <img class="contact-letter" src="./assets/img/letter_send.png" alt="">
  </section>



  <?php
  include "footer.php";

 ?>

</body>

</html>