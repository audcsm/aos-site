<?php

$PageTitle="Advanced Obesity Surgery";

include_once('./partials/header.php');

?>

        <main>
            <div id="banner-img" role="img" style="background-image:url(./images/waiting-area.jpg);background-position: right center;" alt="Chairs and a plant in a hospital waiting room">
                <div class="banner-overlay_navy"></div>
                <div class="container over-banner">
                    <h1 class="text_right">Procedures <br /></h1>
                </div>
            </div>
            <div class="container">
                <p>Dr. Smith has been involved with bariatric surgery for more than 20 years, and was one of the first surgeons in the world to perform the Duodenal Switch procedure completely laparoscopically. Click the buttons below to learn more about each procedure offered.</p>
                <br />
                <div class="row">
                    <div class="col-sm-12 col-lg-4 centered">
                        <h3><strong>Laparoscopic Duodenal Switch</strong></h3>
                        <p>Sometimes referred to as the BPD/DS or the "Switch," this procedure combines restriction with malabsorption of fat to give you a powerful result.</p>
                        <a class="btn" onclick="window.location.href='./ds.php'">Read more</a>
                    </div>
                    <div class="col-sm-12 col-lg-4 centered">
                        <h3><strong>Laparoscopic RNY Gastric Bypass</strong></h3>
                        <p>As the most commonly performed operation over the past 20 years, this procedure activates weight loss well in all weight ranges and has a strong long-term safety record.</p>
                        <a class="btn" onclick="window.location.href='./gb.php'">Read more</a>
                    </div>
                    <div class="col-sm-12 col-lg-4 centered">
                        <h3><strong>Laparoscopic Sleeve Gastrectomy</strong></h3>
                        <p>This is a relatively new operation that can be performed either as a standalone procedure or as part of a staged operation.</p>
                        <a class="btn" onclick="window.location.href='./sg.php'">Read more</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2>Revisions of Bariatric Operations</h2>
                <p>Dr. Smith does laparoscopic revisions of some bariatric operations, in selected situations where the operations have failed or are causing significant problems.</p>
                <p>Some of the revisional procedures offered include:</p>
                <ul>
                    <li>Lap Gastric Band Removal, with conversion to Sleeve Gastrectomy and/or Duodenal Switch</li>
                    <li>Re-Sleeving for Duodenal Switch and Sleeve Gastrectomy patients</li>
                    <li>Limb-lengthening Procedures for RNY Gastric Bypass patients to create Distal Gastric Bypass</li>
                    <li>Adding the bowel bypass portion of a Duodenal Switch to existing Sleeve Gastrectomy</li>
                    <li>Reversal of Malabsorption for Duodenal Switch patients</li>
                </ul>
            </div>
        </main>

<?php

include_once('./partials/footer.php');

?>