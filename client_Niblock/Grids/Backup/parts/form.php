<form id="contact-form">
    <h4>
        Get Results Fast 24/7<br>
        <hr>
        Free Immediate Case Evaluation!<br>
        Call Now <?php echo $phone; ?> or Email
    </h4>

    <input id="haa-phone" type="hidden" name="haa-phone" value="<?php echo $dynamic_phone; ?>">
    <input id="haa-camp" type="hidden" name="haa-camp" value="organic">
    <input id="haa-url" type="hidden" name="haa-url" value="n/a">
    <input id="name" type="text" value="" name="Name" placeholder="* Name" required>
    <input id="phone" type="text" value="" name="Phone" placeholder="* Phone Number" required>
    <input id="email" type="text" value="" name="Email" placeholder="* Email Address" required>

<!--    <input id="textarea" type="text" value="" name="Case Description" placeholder="* Case Description" required>-->



    <textarea id="textarea" placeholder="* Case Description" rows="4"></textarea>


    <!--
    <input id="consent" type="checkbox" value="" name="Consent" onclick="clickTrue()" required/>
    <p>
        I understand and agree that submitting this form does not create an attorney
        client relationship and the information I submit is not confidential or privileged
    </p>
    -->
    <br>
    <div class="submit-button">
        <input style="margin: 8px auto; display: block;" type="button" value="Get Started!" onclick="validateForm()">
    </div>
</form>
<div style="text-align:center; color:white; font-weight: bold" id="status"></div>

<script>
    function clickTrue(){
        var x = document.getElementById("consent");
        if(x.value === ""){
            x.value = "true";
        } else {
            x.value = "";
        }
    }
</script>