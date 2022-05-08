<?php

$PageTitle="Get in Contact";

include_once('./partials/header.php');

// start session
session_start();

if (isset($_POST['contact-form-submit'])) {
    // work in progress, eventually will send form information to designated contact address
    echo "<script>console.debug( \"PHP DEBUG: contact form submitted\" );</script>";
    /*mail("audcsm@gmail.com",
         
         "Form Submission: " . $_POST['last-name'] . ", " . $_POST['first-name'],
         
         "Email address: " . $_POST['email'] . ", Phone number: " . $_POST['tel'] . 
         " \nInsurance provider: " . $_POST['insurance-provider'] . ", Insurance number: " . $_POST['insurance-number'] . 
         " \nHad bariatric surgery? (0=no, 1=yes) " . htmlspecialchars($_GET["hsp"]) . 
         
         ((htmlspecialchars($_GET["hsp"]) == 0)?" \n" . $_SESSION["height"] . " inches, " . $_SESSION["weight"] . " lbs. Previous medical conditions? " . $_SESSION["conditions"] . " \nType interested in: " . $_POST['surgery-interested']) . 
         
         ((htmlspecialchars($_GET["hsp"]) == 1)?" Revision needed. \nMessage: " . $_POST['message'])
        );*/
    header("location: http://advancedobesitysurgery.com/AUDREY/aos-site/form-submitted.php");
    exit();
}

?>

        <main>
            <div id="banner-img" style="background-image:url(http://placekitten.com/1300/600)">
                <div class="banner-overlay_navy"></div>
                <div class="container over-banner">
                    <h1 class="text_right">Get in Contact</h1>
                    <h3>Your inquiry will be responded to shortly.</h3>
                </div>
            </div>
            <div class="container">
                <div class="form-wrapper">
                    <form class="contact" id="contact-form" method="post" action="contact.php">
                        <h2>Your details</h2>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <label for="first-name">First name</label>
                                <input type="text" id="first-name" name="first-name" />
                                <label for="last-name">Last name</label>
                                <input type="text" id="last-name" name="last-name" />
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" />
                                <label for="tel">Phone number</label>
                                <input type="tel" id="tel" name="tel" />
                            </div>
                        </div>
                        <h2>Insurance details</h2>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <label for="insurance-provider">Insurance provider</label>
                                <input type="text" id="insurance-provider" name="insurance-provider" />
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="insurance-number">Insurance number</label>
                                <input type="text" id="insurance-number" name="insurance-number" />
                            </div>
                        </div>
                        <h2>Reason for Contact</h2>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <p class="hsp-0 hidden">
                                    Previously had bariatric surgery? <span id="surgery-previously">No</span>
                                    <br /> Obesity-related medical problems? <span id="medical-problems">
                                    <?php
                                    // call conditions variable and show to user
                                    echo $_SESSION["conditions"];
                                    ?>
                                    </span>
                                    <br /> Height <span id="height">
                                    <?php
                                    // call height variable, convert to feet and inches, show to user
                                    $feet = (int) ($_SESSION["height"] / 12);
                                    $inches = (int) ($_SESSION["height"] % 12);
                                    if ($inches == 0) {
                                        echo $feet . "'";
                                    }
                                    else {
                                        echo $feet . "'" . $inches . "\"";
                                    }
                                    ?>
                                    </span>
                                    <br /> Weight <span id="weight">
                                    <?php
                                    // call weight variable and show to user
                                    echo $_SESSION["weight"] . " lbs";
                                    ?>
                                    </span>
                                </p>
                                <p class="hsp-1 hidden">
                                    Previously had bariatric surgery? <span id="surgery-previously">Yes</span>
                                    <br />Revision needed? <span id="revision-needed">Yes</span>
                                </p>
                            </div>
                            <div class="hsp-0 hidden col-sm-12 col-lg-6">
                                <p>
                                    What type of surgery are you interested in?
                                    <br /><a id="need-help" href="./procedures.php" target="_blank" rel="noopener noreferrer"><small>Need help? Click here for more information.</small></a>
                                </p>
                                <select id="surgery-interested" name="surgery-interested">
                                    <option value="blank">Please select</option>
                                    <option value="ds">Laparoscopic Duodenal Switch</option>
                                    <option value="gb">Laparoscopic RNY Gastric Bypass</option>
                                    <option value="sg">Laparoscopic Sleeve Gastrectomy</option>
                                </select>
                            </div>
                            <div class="hsp-1 hidden col-12" id="message-wrapper">
                                <label for="message">Please briefly describe your history with bariatric surgery.</label>
                                <textarea id="message" name="message" rows="3" cols="40" style="min-width: 100%;"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn" form="contact-form" name="contact-form-submit">Submit</button>
                    </form>
                </div>
            </div>
        </main>

<script>
    
// source: https://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript?answertab=scoredesc#tab-top
const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
// Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
let hsp = params.hsp; // "some_value"

if (hsp == 0) {
    $(".hsp-0").removeClass("hidden");
}
else if (hsp == 1) {
    $(".hsp-1").removeClass("hidden");
}
    
</script>

<?php

include_once('./partials/footer.php');

?>