<div class="container width-p">
    <div class="box left">
        <h2>Few Reasons Why You Choose Us To Protect Nature!</h2>
        <div class="tabs">
            <div class="tab active" onclick="changeTab(1)">Our Vision</div>
            <div class="tab" onclick="changeTab(2)">Our Mission </div>
            <div class="tab" onclick="changeTab(3)">Our History</div>
        </div>
        <div class="content">
            <div id="content1" class="tab-content active">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                    platea dictumst. In velit tortor, tempor non enim vel,
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                    platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam egestas eu felis
                    sed auctor. Pellentesque a nunc egestas, eleifend elit dapibus, fringilla libero. Proin sed finibus
                    odio, eget pellentesque nisl. </p>
                <p><img src="./assets/img/right-arrow.svg" alt=""> Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Cras tempus blandit diam it is dummy content for developers</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Cras tempus blandit diam</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Praesentium, nam?</p>
            </div>
            <div id="content2" class="tab-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                    platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam egestas eu felis
                    sed auctor. Pellentesque a nunc egestas, eleifend elit dapibus, fringilla libero. Proin sed finibus
                    odio, eget pellentesque nislLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus
                    blandit diam. In hac habitasse
                    platea dictumst. In velit tortor, tempor non enim vel,.</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Cras tempus blandit diam</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Praesentium, nam?</p>
            </div>
            <div id="content3" class="tab-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                    platea dictumst. In velit tortor, tempor non enim vel, facilisis malesuada sem. Nam egestas eu felis
                    sed auctor. Pellentesque a nunc egestas, eleifend elit dapibus, fringilla libero. Proin sed finibus
                    odio, eget pellentesque nisl.</p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                platea dictumst. In velit tortor, tempor non enim vel,
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                platea dictumst. In velit tortor, tempor non enim vel,
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus blandit diam. In hac habitasse
                platea dictumst. In velit tortor, tempor non enim vel,
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Cras tempus blandit diam</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Praesentium, nam?</p>
                <p><img src="./assets/img/right-arrow.svg" alt="">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Ut incidunt quibusdam nobis corporis harum
                    sed!</p>
            </div>
        </div>
    </div>
    <div class="box right">
        <img src="./assets/img/man-imgsvg.svg" alt="" width="492" height="660">
    </div>
</div>

<script>
    function changeTab(tabIndex) {
        const tabs = document.getElementsByClassName("tab");
        const contents = document.getElementsByClassName("tab-content");

        for (let i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove("active");
            contents[i].classList.remove("active");
        }

        tabs[tabIndex - 1].classList.add("active");
        contents[tabIndex - 1].classList.add("active");
    }


</script>