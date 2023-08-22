<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
    <title>blog</title>
</head>

<body>


    <section class="head-main width-p">

        <?php
     include "header.php";
     ?>

        <div class="head-maintext-box">

            <div class="small-head-text">

                <h1>blog</h1>
                <img src="./assets/img/dustbin-man-222222.png" alt="">

            </div>
        </div>

    </section>
    <section class="main-blog-container width-p side-padding">

        <div class="blog-text">
            <h1>OUR BLOGS</h1>
        </div>

        <div class="blog-boxes">
            <a href="./blog-section.php">
                <div class="blog-box">


                    <div class="blog-img">
                        <img src="./assets/img/blogs-img.jpg" alt="" width="376px">
                    </div>
                    <h5>IN: Garbage Removal</h5>
                    <h2>A drone is deployed to the target area.</h2>
                    <div class="blog-detail">
                        <div class="date">
                            <p> <img src="./assets/img/calender.svg" alt=""> 10.05.2021</p>
                        </div>
                        <div class="person">
                            <p><img src="./assets/img/person.svg" alt=""> By Wilson Workman</p>
                        </div>
                    </div>

                </div>
            </a>
            <a href="./blog-section.php">
                <div class="blog-box">

                    <div class="blog-img">
                        <img src="./assets/img/blog-img-2.jpg" alt="" width="376px">
                    </div>
                    <h5>IN: Garbage Removal</h5>
                    <h2>A drone is deployed to the target area.</h2>
                    <div class="blog-detail">
                        <div class="date">
                            <p> <img src="./assets/img/calender.svg" alt=""> 10.05.2021</p>
                        </div>
                        <div class="person">
                            <p><img src="./assets/img/person.svg" alt=""> By Wilson Workman</p>
                        </div>
                    </div>

                </div>
            </a>
            <a href="./blog-section.php">
                <div class="blog-box">

                    <div class="blog-img">
                        <img src="./assets/img/BLOG-IMG-3.jpg" alt="" width="376px">
                    </div>
                    <h5>IN: Garbage Removal</h5>
                    <h2>A drone is deployed to the target area.</h2>
                    <div class="blog-detail">
                        <div class="date">
                            <p> <img src="./assets/img/calender.svg" alt=""> 10.05.2021</p>
                        </div>
                        <div class="person">
                            <p><img src="./assets/img/person.svg" alt=""> By Wilson Workman</p>
                        </div>
                    </div>

                </div>
            </a>

        </div>

    </section>




    <?php
     include "videos.php";
     ?>

    <?php
     include "contact-us-section.php";
     ?>


    <?php
    include "footer.php";
    ?>





</body>

</html>