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
        <img class='burger-btn' src="./assets/img/fluent_options_24_filled.png" alt="burger-manu">
        <ul class='nav-list '>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about-us.php')) echo 'class="active-nav"' ; ?> href="./about-us.php" > About
                    us</a></li>
            <li><a <?php if (isCurrentPage('blog-main.php')) echo 'class="active-nav"' ; ?> href="./blog-main.php" >
                    Blog</a></li>
            <li><a <?php if (isCurrentPage('product&services.php')) echo 'class="active-nav"' ; ?>
                    href="./product&services.php" >
                    Products & services</a></li>

            <li><a <?php if (isCurrentPage('contact-us.php')) echo 'class="active-nav"' ; ?> href="./contact-us.php" >
                    Contact Us</a></li>

        </ul>


        <a class="get-consult" href="./contact-us.php">Get Best Quote <svg xmlns="http://www.w3.org/2000/svg" width="18"
                height="18" viewBox="0 0 18 18" fill="none">
                <path
                    d="M9 14.25C8.85103 14.2509 8.70518 14.2074 8.58104 14.125C8.4569 14.0427 8.36009 13.9252 8.30297 13.7876C8.24584 13.65 8.23099 13.4986 8.26029 13.3525C8.28959 13.2064 8.36173 13.0724 8.4675 12.9675L12.4425 9.00001L8.4675 5.03251C8.34463 4.88903 8.28042 4.70447 8.28771 4.51572C8.29501 4.32696 8.37325 4.1479 8.50683 4.01433C8.6404 3.88076 8.81945 3.80251 9.00821 3.79522C9.19696 3.78793 9.38152 3.85214 9.525 3.97501L14.025 8.47501C14.1647 8.61553 14.2431 8.80562 14.2431 9.00376C14.2431 9.20189 14.1647 9.39198 14.025 9.53251L9.525 14.0325C9.3853 14.1711 9.19675 14.2492 9 14.25Z"
                    fill="white" />
                <path
                    d="M4.5 14.25C4.35103 14.2509 4.20518 14.2074 4.08104 14.125C3.9569 14.0426 3.86009 13.9252 3.80297 13.7876C3.74584 13.65 3.73099 13.4986 3.76029 13.3525C3.78959 13.2064 3.86173 13.0724 3.9675 12.9675L7.9425 9L3.9675 5.0325C3.82627 4.89127 3.74693 4.69973 3.74693 4.5C3.74693 4.30028 3.82627 4.10873 3.9675 3.9675C4.10873 3.82627 4.30027 3.74693 4.5 3.74693C4.69972 3.74693 4.89127 3.82627 5.0325 3.9675L9.5325 8.4675C9.67219 8.60802 9.75059 8.79811 9.75059 8.99625C9.75059 9.19439 9.67219 9.38448 9.5325 9.525L5.0325 14.025C4.96304 14.0959 4.8802 14.1522 4.7888 14.1909C4.69739 14.2295 4.59923 14.2496 4.5 14.25Z"
                    fill="white" />
            </svg></a>

    </nav>
    <div class="menu hidden page-width">
        <ul>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php"> Home</a>
            </li>
            <li><a <?php if (isCurrentPage('About-us.php')) echo 'class="active-nav"' ; ?> href="./About-us.php"> About
                    us</a></li>
            <li><a <?php if (isCurrentPage('blog-main.php')) echo 'class="active-nav"' ; ?> href="./blog-main.php" >
                    Blog</a></li>
            <li><a <?php if (isCurrentPage('product&services.php')) echo 'class="active-nav"' ; ?>
                    href="./product&services.php">
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