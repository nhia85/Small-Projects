<div id="header" style='background: url("assets/img/<?php echo $header; ?>.jpg") no-repeat 50% 80%; background-size: cover; background-position-y: 30%;' class="wrapper hide-1-1-0">
    <div class="grid structure-4-2-2 gaped">
        <div class="slot-1-1-1 l-m header-left">
           <img id="logo" src="./assets/img/niblock-logo.jpg" alt="logo">
        </div>

        <div class="slot-1-1-1 c-m header-center-l">
            <?php if ($geo == 'searcy') { ?>
               <h3 style="text-align: center;">Searcy Office <br/> 3 Other Locations</h3>
            <?php } else { ?>
               <h3>Little Rock Office <br/> 3 Other Locations</h3>
            <?php } ?>
        </div>

        <div class="slot-1-1-2 c-m header-center-r s_row-3-3">
            <h3>Free Immediate <br class="hide-1-1-0"> Case Evaluation</h3>
        </div>

        <div class="slot-1-1-2 r-m s_c-m header-right s_row-2-2">
            <div id="contact-grid" class="structure-2-2-1">
                <div>
                <h3 style="text-align: center;">Call Us Now!<br class="hide-1-1-0 ">
                    <span class="phone-number "><a class="phone-c2a" href="tel:<?php echo $dynamic_phone; ?>"><?php echo $dynamic_phone; ?></a></span></h3>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Did it in 2 differnt wrapper since it needs the header image background -->

<div id="header" class="wrapper hide-0-0-1">
    <div class="grid structure-4-2-2 gaped">
        <div class="slot-1-1-1 l-m header-left">

           <img id="logo" src="./assets/img/niblock-logo.jpg" alt="logo">

        </div>

        <div class="slot-1-1-1 c-m header-center-l">

            <?php if ($geo == 'searcy') { ?>
                <h3 style="font-size: 5vw;">Searcy Office</h3>
            <?php } else { ?>
                <h3 style="font-size: 5vw;">Little Rock<br> Office</h3>
            <?php } ?>

        </div>
        <div class="slot-1-1-2 c-m header-center-r s_row-3-3">

            <h3>Free Immediate <br class="hide-1-1-0"> Case Evaluation</h3>

        </div>
        <div class="slot-1-1-2 r-m s_c-m header-right s_row-2-2">
            <div id="contact-grid" class="structure-2-2-1">
                <div>
                <h3>Call Us Now!<br class="hide-1-1-0 ">
                    <span class="phone-number "><a class="phone-c2a" href="tel:<?php echo $dynamic_phone; ?>"><?php echo $dynamic_phone; ?></a></span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
