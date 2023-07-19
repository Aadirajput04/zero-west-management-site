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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


   <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
   <title>HOME</title>
</head>

<body>

   <?php
   include "header.php";
  ?>

   <div class="carousel-container ">
      <div class="carousel-images">

         <img src="./assets/img/home-bg.png" alt="">
         <img src="./assets/img/home-bg.png" alt="">
         <img src="./assets/img/home-bg.png" alt="">
      </div>
      <div class="carousel-content">
         <p>Price: 2 / sqmeter</p>
         <h2>Waste Measurement Drone Mapping Service</h2>
         <p>Details: Zero Waste Management is in collaboration for drone mapping & Survey with Wastevoltaic. We have
            micro category survey-grade deone...</p>
         <button class="button-hover"><span> Get Best Quote >></span></button>
      </div>
      <div class="carousel-arrow">
         <!-- <img src="./assets/img/arrow-rightsvg.svg" alt=""> -->
      </div>
   </div>





   <?php
   include "reasons.php";
  ?>
  
  <?php
  include "videos.php";
 ?>




<?php
  include "product-section.php";

 ?>



<?php
  include "feedback.php";

 ?>












<?php
  include "blog.php";

 ?>

 
<?php
  include "footer.php";

 ?>


   <script>
      $(document).ready(function () {
         var images = ['home-bg.png', 'home-bg.png', 'home-bg.png'];

         function changeBackground() {
            var randomIndex = Math.floor(Math.random() * images.length);
            var imageUrl = './assets/img/home-bg.png' + images[randomIndex];
            $('.carousel-images').css('transform', 'translateX(-' + randomIndex * 100 + '%)');
            $('.carousel-images img').css('background-image', 'url(' + home - bg.png + ')');
         }

         $('.carousel-arrow').click(function () {
            changeBackground();
         });

         changeBackground();
      });

   </script>

</body>

</html>