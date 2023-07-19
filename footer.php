<footer>
    <div class="upper-footer">
        <div class="left-footer-box">
            <div class="logo-footer-box">
                <img src="./assets/img/main-logo.png" alt="logo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam.</p>
                <div class="social-links">
                    <a href="#"> <img src="./assets/img/foot-facebook.svg" alt=""></a>
                    <a href="#"> <img src="./assets/img/foot-linkedin.svg" alt=""></a>
                    <a href="#"> <img src="./assets/img/foot-youtube.svg" alt=""></a>
                    <a href="#"> <img src="./assets/img/foot-twitter.svg" alt=""></a>

                    <a href="#"> <img src="./assets/img/foot-instagram.svg" alt=""></a>
                </div>

            </div>
            <hr>
            <div class="page-link-footer">
                <h3>Quick Links</h3>
                <div class="quick-links">
                    <a href="#"><img src="./assets/img/footer-arrow.svg" alt=""> About Us</a>
                    <a href="#"><img src="./assets/img/footer-arrow.svg" alt=""> News</a>
                    <a href="#"><img src="./assets/img/footer-arrow.svg" alt=""> Testimonial</a>
                    <a href="#"><img src="./assets/img/footer-arrow.svg" alt=""> Contact Us</a>
                    <a href="#"><img src="./assets/img/footer-arrow.svg" alt=""> Sitemap</a>
                </div>
            </div>
            <hr>
            <div class="contact-us-footer">
                <h3>Contact Us</h3>
                <div class="contact-address">
                    <p><img src="./assets/img/location.svg" alt=""> Riverside Building, County Hall, London SE1 7PB,
                        United Kingdom</p>
                    <p><img src="./assets/img/gmail.svg" alt=""> albertjohns@gmail.com</p>
                    <p><img src="./assets/img/call-.svg" alt=""> 07942803870</p>
                </div>
            </div>

            <hr>

        </div>
        <div class="right-footer-box">

            <h3>Subscribe Our Newsletter</h3>
            <div class="subscribe-box-footer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam.</p>
                <form action="">
                    <input type="email" id="emailInput" placeholder="Email Address">
                    <button class="subscribe" onclick="submitEmail()">Submit</button>
                </form>
            </div>
        </div>





    </div>
    <div class="copyright-box">
        <div class="left-copyright">
           <a href="#"> Copyright ©2022</a>
        </div>
        <div class="right-copyright">
            <a href="#">Terms</a>
            <hr>
            <a href="#">Privacy</a>
            <hr>

            <a href="#">Policy and Cookie Policy</a>

        </div>
    </div>



</footer>
<script>
    function submitEmail() {
        // Get the value from the input box
        var email = document.getElementById("emailInput").value;

        // You can perform validation here to ensure the email is in a valid format if needed

        // Perform any other actions with the email, such as submitting it to a server

        // For this example, we'll just display an alert with the entered email
        alert("Email submitted: " + email);
    }
</script>