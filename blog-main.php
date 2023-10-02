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
        <button>View all <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path
                    d="M9 14.25C8.85103 14.2509 8.70518 14.2074 8.58104 14.125C8.4569 14.0427 8.36009 13.9252 8.30297 13.7876C8.24584 13.65 8.23099 13.4986 8.26029 13.3525C8.28959 13.2064 8.36173 13.0724 8.4675 12.9675L12.4425 9.00001L8.4675 5.03251C8.34463 4.88903 8.28042 4.70447 8.28771 4.51572C8.29501 4.32696 8.37325 4.1479 8.50683 4.01433C8.6404 3.88076 8.81945 3.80251 9.00821 3.79522C9.19696 3.78793 9.38152 3.85214 9.525 3.97501L14.025 8.47501C14.1647 8.61553 14.2431 8.80562 14.2431 9.00376C14.2431 9.20189 14.1647 9.39198 14.025 9.53251L9.525 14.0325C9.3853 14.1711 9.19675 14.2492 9 14.25Z"
                    fill="white" />
                <path
                    d="M4.5 14.25C4.35103 14.2509 4.20518 14.2074 4.08104 14.125C3.9569 14.0426 3.86009 13.9252 3.80297 13.7876C3.74584 13.65 3.73099 13.4986 3.76029 13.3525C3.78959 13.2064 3.86173 13.0724 3.9675 12.9675L7.9425 9L3.9675 5.0325C3.82627 4.89127 3.74693 4.69973 3.74693 4.5C3.74693 4.30028 3.82627 4.10873 3.9675 3.9675C4.10873 3.82627 4.30027 3.74693 4.5 3.74693C4.69972 3.74693 4.89127 3.82627 5.0325 3.9675L9.5325 8.4675C9.67219 8.60802 9.75059 8.79811 9.75059 8.99625C9.75059 9.19439 9.67219 9.38448 9.5325 9.525L5.0325 14.025C4.96304 14.0959 4.8802 14.1522 4.7888 14.1909C4.69739 14.2295 4.59923 14.2496 4.5 14.25Z"
                    fill="white" />
            </svg></button>

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