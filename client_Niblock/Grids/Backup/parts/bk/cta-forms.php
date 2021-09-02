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
        <span class="cta-tagline">Minnesota's Largest<br>Bankruptcy Law Firm</span>
      </h3>
    <?php } ?>
  </div>

<?php } elseif($device == 'mobile'){ ?>
  <div class="cta-1">
      <h2 id="haaHdx">Call Now! <?php echo $phone; ?> or <a href="#contact-form"><img src="<?php bloginfo('template_url'); ?>/LPV4/assets/images/emailIconBlue.jpg" id="forms-email-icon" /></a></h2>
  </div>
<?php } ?>
