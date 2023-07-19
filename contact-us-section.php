<section class="contact-us-container width-p">

    <div class="contact-us-image">
        <img src="./assets/img/contact-us-image.jpg" alt="">
    </div>
    <div class="contact-text-box">

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

            <div>
                <button onclick="submitForm()">Submit</button>
            </div>









        </div>
        <div class="address-box">

            <p><img src="./assets/img/gmail.svg" alt=""  height="50"  > albertjohns@gmail.com</p>
            <p><img src="./assets/img/call-.svg" alt="" height="50" > 07942803870</p>
            <p><img src="./assets/img/location.svg" alt="" height="50" > A-501, Lake City Apartment, Karadva Village, Dindoli,
                Udhana. Surat - 394210, Gujarat, India</p>


        </div>

    </div>




</section>
<script>
    function submitForm() {
        var name = document.getElementById("nameInput").value;
        var email = document.getElementById("emailInput").value;
        var message = document.getElementById("messageInput").value;

        // Here you can perform actions to submit the form data to a server or take other necessary actions

        alert("Form submitted successfully!");
    }
</script>