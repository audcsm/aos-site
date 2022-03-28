<?php

$PageTitle="Advanced Obesity Surgery";

include_once('./partials/header.php');

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
                        <p>Click the button that suits you</p>
                        <div class="buttons">
                            <a id="noSurgery" class="btn large">No, I have not had bariatric surgery</a>
                            <a id="hadSurgery" class="btn large">Yes, I have had bariatric surgery</a>
                        </div>
                        <div class="noSurgery">
                            <div class="noSurgery__columns row">
                                <div class="noSurgery__column col-sm-12 col-lg-4">
                                    <h3>1</h3>
                                    <p>What is your height?</p>
                                    <p>We will use this to calculate your BMI.</p>
                                    <form>
                                        <select name="height" id="height" onchange="triggerEligible()">
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
                                    </form>
                                </div>
                                <div class="noSurgery__column col-sm-12 col-lg-4">
                                    <h3>2</h3>
                                    <p>What is your weight in lbs?</p>
                                    <p>We will use this to calculate your BMI.</p>
                                    <form>
                                        <input type="number" id="weight" name="weight" min="100" max="1500" placeholder="Enter weight" onchange="triggerEligible()">
                                    </form>
                                </div>
                                <div class="noSurgery__column col-sm-12 col-lg-4">
                                    <h3>3</h3>
                                    <p>Do you have any obesity-related medical problems, such as diabetes, high blood pressure, sleep apnea, disabling osteoarthritis, etc?</p>
                                    <form>
                                        <select id="conditions" onchange="triggerEligible()">
                                            <option value="blank">Please select</option>
                                            <option value="no">No, I have none of these</option>
                                            <option value="yes">Yes, I have one or more of these</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="hadSurgery">
                            <h3 class="h3">Are you looking for a revision, or post-operation resources?</h3>
                            <div class="hadSurgery__buttons">
                                <a href="#" class="btn">I'm interested in revisional surgery</a>
                                <a href="#" class="btn">I need post-operation resources</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yesEligible">
                    <div class="container">
                        <h2 class="h2">You are eligible for an operation.</h2>
                        <a class="btn">Get in contact <i class="bi bi-chevron-double-right"></i></a>
                        <div>
                            <p>This will take you to a form where we can get more information about you and your interests.</p>
                        </div>
                    </div>
                </div>
                <div class="notEligible">
                    <div class="container">
                        <h2 class="h2">Unfortunately, you are not eligible to claim</h2>
                        <div>
                            <p>From the information you have provided you are not eligible to claim.</p>
                            <p>If you have any questions, please call us on 0333 200 0069</p>
                        </div>
                    </div>
                 </div>
            </div>
        </main>

<script>
// button select shows different expansions to the questionnaire
// also sets colour changes for active vs inactive
$("#noSurgery").click(function(){
    $(".notEligible, .yesEligible").removeClass("active");
    $("#hadSurgery").removeClass("navy").addClass("inactive");
    $(".hadSurgery").slideUp();
    $("#noSurgery").removeClass("inactive").addClass("navy");
    $(".noSurgery").delay(500).slideDown();
});

$("#hadSurgery").click(function(){
    $(".notEligible, .yesEligible").removeClass("active");
    $("#noSurgery").removeClass("navy").addClass("inactive");
    $("#height, #weight, #conditions").val("blank");
    $(".noSurgery").slideUp();
    $("#hadSurgery").removeClass("inactive").addClass("navy");
    $(".hadSurgery").delay(500).slideDown();
});
    

// form select combinations to trigger yes/notEligible
function triggerEligible(){
    if ($("#height").val() !== "blank" && $("#conditions").val() !== "blank") {
            
        var bmiCalc = ($("#weight").val() / ($("#height").val() * $("#height").val())) * 703;
            
        // if bmiCalc >= 40 OR if bmiCalc >= 35 && conditions, eligible
        if (bmiCalc >= 40 || (bmiCalc >= 35 && $("#conditions").val() == "yes")) {
            $(".notEligible").removeClass("active");
            $(".yesEligible").addClass("active");
            alert("yes eligible");
        }
        // not eligible
        else {
            $(".yesEligible").removeClass("active");
            $(".notEligible").addClass("active");
            alert("not eligible");
        }
    }
}
</script>

<?php

include_once('./partials/footer.php');

?>