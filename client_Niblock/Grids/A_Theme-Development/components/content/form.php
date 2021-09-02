
<div id="modal-form" class="start-closed">
<?php
    //TODO: jp - add php contitional logic for form processing
    ?>
<div id="form-grid">
    <form id="form">
        <button id="modal-close">close</button>
        <h3>
            Free Case Evaluation
        </h3>

        <h3>Contact Us Today</h3>
        <hr>

        <input id="haa-phone" type="hidden" name="haa-phone" value="<?php echo $dynamic_phone; ?>">
        <input id="haa-camp" type="hidden" name="haa-camp" value="organic">
        <input id="haa-url" type="hidden" name="haa-url" value="n/a">
        <input id="haa-clid" type="hidden" name="haa-clid" value="n/a">
<div class="form-grid structure-2-2-1 gaped">
        <input id="first-name" type="text" value="" name="First Name" placeholder="* First Name" required>
        <input id="last-name" type="text" value="" name="Last Name" placeholder="* Last Name" required>
        <input id="phone" type="text" value="" name="Phone" placeholder=" Phone Number" required>
        <input id="email" type="text" value="" name="Email" placeholder="* Email Address" required>

        <textarea class="slot-2-2-1" id="message" placeholder="* Case Info/Questions" rows="4" wrap="off"></textarea>
</div>
        <div id="consent-grid">

        <p>
            <input id="consent" type="checkbox" value="" name="Consent" onclick="clickTrue()" required/>
            I understand and agree that submitting this form does not create an attorney
            client relationship and the information I submit is not confidential or privileged
        </p>
        </div>

        <div class="submit-button">
            <input class="btn1" style="margin: 8px auto; display: block;" type="button" value="Get Started!" onclick="validateForm()">
        </div>
    </form>


</div>
    <div style="text-align:center; color:white; font-weight: bold" id="status"></div>
</div>

<script>
    const openBtn = document.getElementById('modal-open-button');
    const closeBtn = document.getElementById('modal-close');
    const modalForm = document.getElementById('modal-form');
    const theForm = document.getElementById('form');

    function modalOpen() {
        modalForm.classList = 'open';
        modalForm.classList.remove('start-closed');
        theForm.classList = "grow";
    }
    closeBtn.onclick = () => {
        modalForm.classList.remove('open');
        modalForm.classList = 'start-closed';
        theForm.classList.remove('grow');
    }
</script>