<header>
    <nav class='navbar width-p side-padding'>

        <?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName;
}
?>
        <a href="./index.php">
            <img class="main-logo" src="./assets/img/nav-logo.png" alt=""></a>
        <img class='burger-btn' src="./imgs/burger-btn.png" alt="burger-manu">
        <ul class='nav-list '>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php"  > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about-us.php')) echo 'class="active-nav"' ; ?> href="./about-us.php"  > About
                    us</a></li>
            <li><a <?php if (isCurrentPage('product&services.php')) echo 'class="active-nav"' ; ?> href="./product&services.php"  >
                    Products & services</a></li>
           
            <li><a <?php if (isCurrentPage('contact-us.php')) echo 'class="active-nav"' ; ?> href="./contact-us.php"  >
                    Contact Us</a></li>

        </ul>


    <a class="get-consult" href="./contact-us.php">Get Best Quote >></a>

    </nav>
    <div class="menu hidden page-width">
        <ul>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php"> Home</a>
            </li>
            <li><a <?php if (isCurrentPage('About-us.php')) echo 'class="active-nav"' ; ?> href="./About-us.php"> About
                    us</a></li>
            <li><a <?php if (isCurrentPage('product&services.php')) echo 'class="active-nav"' ; ?> href="./product&services.php">
                Products & services</a></li>
            
            <li><a <?php if (isCurrentPage('contact-us.php')) echo 'class="active-nav"' ; ?> href="./contact-us.php">
                    Contact Us</a></li>
        </ul>
    </div>
</header>
<script>

    const btn = document.querySelector('.burger-btn');
    const menu = document.querySelector('.menu');
    const navbar = document.querySelector('.navbar');

    if (window.innerWidth > 740) {
        menu.style.height = 0;
        menu.style.opacity = 0;
    };

    btn.addEventListener('click', function () {
        if (menu.style.height == '0px') {
            menu.style.height = '140px';
            navbar.style.boxShadow = 'none';
            menu.style.opacity = 1;
        } else {
            menu.style.height = 0;
            menu.style.opacity = 0;

        }
    })


</script>