<?php

$PageTitle="Advanced Obesity Surgery";

include_once('./partials/header.php');

?>

        <main>
            <div id="banner-img" style="background-image:url(http://placekitten.com/1300/600)">
                <div class="banner-overlay_navy"></div>
                <div class="container over-banner">
                    <h1 class="text_right">AdventHealth Celebration <br />Bariatric Surgery</h1>
                    <h2>Based in Celebration, Central Florida</h2>
                    <h4>Introductory information, marketing message, here.</h4>
                    <a class="btn large" onclick="window.location.href='./start-here.php'">Start here <i class="bi bi-chevron-double-right"></i></a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-9">
                        <h5>A few sentences of quick information, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus dui, cursus vitae elit quis, mattis suscipit massa. Fusce nec diam leo.</h5>
                        <br />
                    </div>
                    <div class="col-sm-12 col-lg-3 centered">
                        <a class="btn" onclick="window.location.href='./hospital.php'">Read more</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-9">
                        <h5>Proin quis sem elit. Nunc eget eros aliquet, lobortis ante sit amet, porttitor turpis. Proin sodales fringilla condimentum. Phasellus tristique sem et orci feugiat, ac euismod purus faucibus. Curabitur pretium ante at nisi accumsan, vitae iaculis lectus porttitor.</h5>
                    </div>
                    <div class="col-sm-12 col-lg-3 centered">
                        <a class="btn" onclick="window.location.href='./meet-dr.php'">Meet Dr. Smith</a>
                    </div>
                </div>
            </div>
            <div class="feature-section">
                <div class="row">
                    <span id="pointer_left" class="col-sm-0 col-lg-3"></span>
                    <div id="feature-text" class="col-sm-12 col-lg-6">
                        <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus dui, cursus vitae elit quis, mattis suscipit massa. Fusce nec diam leo."</p></blockquote>
                    </div>
                    <span id="pointer_right" class="col-sm-0 col-lg-3"></span>
                </div>
            </div>
            <div class="container centered">
                <h5>Marketing message with something like “click below to take the first step” Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lectus dui, cursus vitae elit quis, mattis suscipit massa.</h5>
                <a class="btn large" onclick="window.location.href='./start-here.php'">Start here <i class="bi bi-chevron-double-right"></i></a>
            </div>
        </main>

<?php

include_once('./partials/footer.php');

?>