<?php

$PageTitle="Start Here";

include_once('./partials/header.php');

session_start();

function saveData() {
    $_SESSION["height"] = $_POST["height"];
    $_SESSION["weight"] = $_POST["weight"];
    $_SESSION["conditions"] = $_POST["conditions"];
}
if (isset($_POST['noSurgery-form-submit'])){
    saveData();
    header("location: http://advancedobesitysurgery.com/AUDREY/aos-site/contact.php?hsp=0");
    exit();
}

?>

        <main>
            <div id="banner-img" style="background-image:url(http://placekitten.com/1300/600)">
                <div class="banner-overlay_navy"></div>
                <div class="container over-banner">
                    <h1 class="text_right">Begin Your Journey <br /></h1>
                    <h3>The following survey will help us understand <br />your history regarding bariatric surgery.</h3>
                </div>
            </div>
            <div class="container">
                <div class="questionnaire">
                    <div class="container">
                        <h2 class="h2">Have you previously had bariatric surgery?</h2>
                        <p>This includes operations from any surgeon, not just Dr. Smith. <br />Click the button that suits your experience.</p>
                        <div class="questionnaire__content row">
                            <div class="questionnaire__buttons col-sm-12 col-lg-7">
                                <a id="noSurgery" class="btn large" onclick="setActive('#noSurgery')">No, I would like a consultation</a>
                                <a id="hadSurgery" class="btn large" onclick="setActive('#hadSurgery')">Yes, and I have some questions</a>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <div class="noSurgery">
                                    <form action="start-here.php" method="post" id="noSurgery-form">
                                        <div class="noSurgery__column">
                                            <h3>1</h3>
                                            <h5>What is your height?</h5>
                                            <p>We will use this to calculate your BMI.</p>
                                            <div class="input-wrapper">
                                                <select name="height" id="height" onchange="checkBMI()">
                                                    <option value="blank" >Please select</option>
                                                    <optgroup label="4">
                                                        <option value="48">4&rsquo;</option>
                                                        <option value="49">4&rsquo;&nbsp;1&rdquo;</option>
                                                        <option value="50">4&rsquo;&nbsp;2&rdquo;</option>
                                                        <option value="51">4&rsquo;&nbsp;3&rdquo;</option>
                                                        <option value="52">4&rsquo;&nbsp;4&rdquo;</option>
                                                        <option value="53">4&rsquo;&nbsp;5&rdquo;</option>
                                                        <option value="54">4&rsquo;&nbsp;6&rdquo;</option>
                                                        <option value="55">4&rsquo;&nbsp;7&rdquo;</option>
                                                        <option value="56">4&rsquo;&nbsp;8&rdquo;</option>
                                                        <option value="57">4&rsquo;&nbsp;9&rdquo;</option>
                                                        <option value="58">4&rsquo;&nbsp;10&rdquo;</option>
                                                        <option value="59">4&rsquo;&nbsp;11&rdquo;</option>
                                                    </optgroup>
                                                    <optgroup label="5">
                                                        <option value="60">5&rsquo;</option>
                                                        <option value="61">5&rsquo;&nbsp;1&rdquo;</option>
                                                        <option value="62">5&rsquo;&nbsp;2&rdquo;</option>
                                                        <option value="63">5&rsquo;&nbsp;3&rdquo;</option>
                                                        <option value="64">5&rsquo;&nbsp;4&rdquo;</option>
                                                        <option value="65">5&rsquo;&nbsp;5&rdquo;</option>
                                                        <option value="66">5&rsquo;&nbsp;6&rdquo;</option>
                                                        <option value="67">5&rsquo;&nbsp;7&rdquo;</option>
                                                        <option value="68">5&rsquo;&nbsp;8&rdquo;</option>
                                                        <option value="69">5&rsquo;&nbsp;9&rdquo;</option>
                                                        <option value="70">5&rsquo;&nbsp;10&rdquo;</option>
                                                        <option value="71">5&rsquo;&nbsp;11&rdquo;</option>
                                                    </optgroup>
                                                    <optgroup label="6">
                                                        <option value="72">6&rsquo;</option>
                                                        <option value="73">6&rsquo;&nbsp;1&rdquo;</option>
                                                        <option value="74">6&rsquo;&nbsp;2&rdquo;</option>
                                                        <option value="75">6&rsquo;&nbsp;3&rdquo;</option>
                                                        <option value="76">6&rsquo;&nbsp;4&rdquo;</option>
                                                        <option value="77">6&rsquo;&nbsp;5&rdquo;</option>
                                                        <option value="78">6&rsquo;&nbsp;6&rdquo;</option>
                                                        <option value="79">6&rsquo;&nbsp;7&rdquo;</option>
                                                        <option value="80">6&rsquo;&nbsp;8&rdquo;</option>
                                                        <option value="81">6&rsquo;&nbsp;9&rdquo;</option>
                                                        <option value="82">6&rsquo;&nbsp;10&rdquo;</option>
                                                        <option value="83">6&rsquo;&nbsp;11&rdquo;</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <h3>2</h3>
                                            <h5>What is your weight in lbs?</h5>
                                            <p>We will use this to calculate your BMI.</p>
                                            <div class="input-wrapper">
                                                <input type="number" id="weight" name="weight" min="100" max="1500" placeholder="Enter weight" onchange="checkBMI()">
                                            </div>
                                            <h3>3</h3>
                                            <h5>Do you have any obesity-related medical problems?</h5>
                                            <p>(diabetes, high blood pressure, sleep apnea, disabling osteoarthritis, etc)</p>
                                            <div class="input-wrapper">
                                                <select id="conditions" name="conditions" onchange="checkBMI()">
                                                    <option value="blank">Please select</option>
                                                    <option value="No">No, I have none of these</option>
                                                    <option value="Yes">Yes, I have one or more of these</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="hadSurgery">
                                    <h3 class="h3">What are you looking for?</h3>
                                    <div class="hadSurgery__buttons">
                                        <a href="./contact.php" onclick="location.href=this.href+'?hsp='+1;return false;" class="btn">I have an issue with my operation and am in need of a revision</a>
                                        <!--- button below will redirect to post-op resources -->
                                        <a href="#" class="btn">I need help with maintaining my health post-operation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qualifies">
                    <div class="container">
                        <a class="close-overlay" onclick="closeOverlay('.qualifies')">&times;</a>
                        <h2 class="h2">Please contact us to set up a consultation.</h2>
                        <button type="submit" form="noSurgery-form" name="noSurgery-form-submit" class="btn">Get in contact <i class="bi bi-chevron-double-right"></i></button>
                        <div>
                            <p>This will take you to a form where we can get more information about you and your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="disqualifies">
                    <div class="container">
                        <a class="close-overlay" onclick="closeOverlay('.disqualifies')">&times;</a>
                        <h2 class="h2">You may not meet the qualifications for bariatric surgery.</h2>
                        <div>
                            <p id="showBMI">Your calculated BMI is ---. Patients typically have a BMI of 40+, or 35+ with obesity-related medical problems.</p>
                            <p>If you feel this assessment is incorrect, do not hesitate to get in contact.</p>
                            <a href="./index.php" class="btn">Back to home</a>
                        </div>
                    </div>
                 </div>
            </div>
        </main>

<script>
// button select shows different expansions to the questionnaire
// also sets colour changes for active vs inactive
function setActive(elem) {
    $(".disqualifies, .qualifies").removeClass("active");
    $("#hadSurgery, #noSurgery").removeClass("navy").addClass("inactive");
    $(".hadSurgery, .noSurgery").slideUp();
    
    $(elem).removeClass("inactive").addClass("navy");
    
    var findClass = $(elem).attr('id');
    $("." + findClass).delay(500).slideDown();
}
    

// form select combinations to trigger yes/disqualifies
function checkBMI(){
    if ($("#height").val() !== "blank" && $("#conditions").val() !== "blank") {
            
        var bmiCalc = ($("#weight").val() / ($("#height").val() * $("#height").val())) * 703;
        var bmiRound = Math.round(bmiCalc);
            
        // if bmiCalc >= 40 OR if bmiCalc >= 35 && conditions, qualifies
        if (bmiCalc >= 40 || (bmiCalc >= 35 && $("#conditions").val() == "Yes")) {
            openOverlay('.qualifies');
        }
        // doesn't qualify
        else {
            $("#showBMI").empty().html("Your calculated BMI is " + bmiRound + ". Patients typically have a BMI of 40+, or 35+ with obesity-related medical problems.");
            openOverlay('.disqualifies');
        }
    }
}
    

// open specified overlay for qualifies/disqualifies
function openOverlay(elem) {
    $(".qualifies, .disqualifies").removeClass("active");
    $(elem).addClass("active");
    document.documentElement.style.overflow = 'hidden';
    document.body.scroll = "no";
}

    
// close qual/disqual overlay when clicked
function closeOverlay(elem) {
    $("#height, #weight, #conditions").val("blank");
    $(elem).removeClass("active");
    document.documentElement.style.overflow = 'scroll';
    document.body.scroll = "yes";
}

</script>

<?php

include_once('./partials/footer.php');

?>