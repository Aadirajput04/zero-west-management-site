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

        <button class="contact-main-button" onclick="submitForm()">Submit <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none">
  <path d="M9.00003 16.1955C8.85106 16.1964 8.70521 16.149 8.58107 16.0593C8.45693 15.9696 8.36013 15.8417 8.303 15.6918C8.24588 15.542 8.23102 15.377 8.26032 15.2179C8.28962 15.0588 8.36176 14.9128 8.46753 14.7985L12.4425 10.4767L8.46753 6.15501C8.34466 5.99872 8.28045 5.79768 8.28775 5.59207C8.29504 5.38646 8.37329 5.19142 8.50686 5.04592C8.64043 4.90043 8.81948 4.81519 9.00824 4.80725C9.197 4.79931 9.38155 4.86925 9.52503 5.00309L14.025 9.90487C14.1647 10.0579 14.2431 10.265 14.2431 10.4808C14.2431 10.6967 14.1647 10.9037 14.025 11.0568L9.52503 15.9586C9.38533 16.1095 9.19678 16.1946 9.00003 16.1955Z" fill="white"/>
  <path d="M4.50003 16.1957C4.35106 16.1967 4.20521 16.1493 4.08107 16.0596C3.95693 15.9699 3.86013 15.8419 3.803 15.6921C3.74588 15.5422 3.73102 15.3772 3.76032 15.2181C3.78962 15.059 3.86176 14.913 3.96753 14.7987L7.94253 10.477L3.96753 6.15523C3.8263 6.0014 3.74696 5.79275 3.74696 5.57519C3.74696 5.35763 3.8263 5.14898 3.96753 4.99515C4.10876 4.84131 4.3003 4.75488 4.50003 4.75488C4.69975 4.75488 4.8913 4.84131 5.03253 4.99515L9.53253 9.89693C9.67222 10.05 9.75062 10.2571 9.75062 10.4729C9.75062 10.6887 9.67222 10.8958 9.53253 11.0489L5.03253 15.9506C4.96307 16.0278 4.88023 16.0892 4.78883 16.1313C4.69742 16.1734 4.59926 16.1953 4.50003 16.1957Z" fill="white"/>
</svg></button>
      </div>


    </div>
    <img class="contact-letter" src="./assets/img/letter_send.png" alt="">
  </section>



  <?php
  include "footer.php";

 ?>

</body>

</html>