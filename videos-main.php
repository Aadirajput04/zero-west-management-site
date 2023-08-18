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
    <title>videos</title>
</head>

<body>


    <section class="head-main width-p">

        <?php
     include "header.php";
     ?>

        <div class="head-maintext-box">

            <div class="small-head-text">

                <h1>videos</h1>
                <img src="./assets/img/dustbin-man-222222.png" alt="">

            </div>
        </div>

    </section>

<div class="heading-video">
    <h1>Our Videos</h1>
</div>


    <div #swiperRef="" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/qO8kdo8pH0Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
        </div>

        <div class="controls-navigate">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>







    <?php
    include "footer.php";
    ?>




    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        var appendNumber = 4;
        var prependNumber = 1;
        document
            .querySelector(".prepend-3-slides")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide([
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
                ]);
            });
        document
            .querySelector(".prepend-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.prependSlide(
                    '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
                );
            });
        document
            .querySelector(".append-slide")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide(
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
                );
            });
        document
            .querySelector(".append-2-slides")
            .addEventListener("click", function (e) {
                e.preventDefault();
                swiper.appendSlide([
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                    '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
                ]);
            });
    </script>

</body>

</html>