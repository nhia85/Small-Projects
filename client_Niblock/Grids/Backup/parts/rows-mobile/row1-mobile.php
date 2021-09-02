<div class="row r1 align-middle">

    <div class="columns small-6 medium-6 large-3">

        <img src="<?php echo $assets; ?>assets/images/niblock-logo.png" class="r1-logo" alt="Niblock Law Logo"/>

    </div>

    <div class="columns small-6 medium-6 large-9">

        <?php

        echo '<div class="addrs">';

            include __DIR__.('/../top-addr.php');

        echo '</div>';

        ?>

    </div>

    <div class="columns small-12 medium-12 show-for-small-only ">

        <div>
            <?php include __DIR__.('/../bk/cta.php'); ?>
        </div>
        <div class="helping-families2">
            <h4>Free Immediate Case Evaluation</h4>
        </div>

        <div>
          <h1 id="haaHd">
              <?php echo $camp; ?>
          </h1>
        </div>

        <div class="mn-largest">
            <h2>One Of <?php echo $state; ?>' Largest<br> Bankruptcy Law Firms</h2>
            <h4>34 Years Of Combined Experience</h4>
        </div>
    </div>


    <div class="columns small-12 medium-12 hide-for-small-only">
      <div class="row">

        <div class="large-6 medium-6 small-6">
          <h1 id="haaHd">
              <?php echo $camp; ?>
          </h1>
        </div>

        <div class="large-6 medium-6 small-6 ipad-call-now">
            <div>
                <?php include __DIR__.('/../bk/cta.php'); ?>
            </div>
            <div class="helping-families">
                <h4>Free Immediate Case Evaluation</h4>
            </div>
        </div>

      </div>
    </div>

</div>
