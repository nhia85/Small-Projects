<?php
// Partial template
// pulled for HCM BK Callouts
?>
<?php if($device == 'desk') { ?>

  <div class="cta-1 <?php if($isMobileStack) : ?>mobileStack<?php endif; ?>">
    <?php if($device == 'desk'){ ?>
      <h2 id="haaHdx">Call Us Now!<br></h2>
      <h3>
        <span class="cta-phone"><?php echo $phone; ?><br></span>
        <span class="cta-tagline">One Of <?php echo $state; ?>'s Largest<br>Bankruptcy Law Firms</span>
      </h3>
    <?php } ?>
  </div>

<?php } elseif($device == 'mobile'){ ?>
  <div class="cta-1">
    <h2 id="haaHdx">Call Now! <?php echo $phone; ?></h2>
  </div>
<?php } ?>
