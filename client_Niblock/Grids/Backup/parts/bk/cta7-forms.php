<?php
// Partial template
// pulled for HCM BK Callouts
?>

<?php if($haa_query_2 == 'chapter-7' || $haa_query_2 == 'chapter-13' || $haa_query_2 == 'garnishment') { ?>
  <div class="cta-1" id="forms-cta7">
      <h3>
          <span class="cta-tagline">Minnesota's Largest<br>Bankruptcy Law Firm</span>
      </h3>
      <h4 class="years-combined">120 Years Of Combined Experience</h4>
  </div>
<?php } elseif($haa_query_2 == 'foreclosure') { ?>
  <div class="cta-1">
      <h3><span class="cta-tagline2">One Of Minnesota's Largest<br>Foreclosure Prevention Firms</span></h3>
  </div>
<?php } else { ?>
  <div class="cta-1" id="forms-cta7">
      <h3>
          <span class="cta-tagline">Minnesota's Largest<br>Bankruptcy Law Firm</span>
      </h3>
      <h4 class="years-combined">120 Years Of Combined Experience</h4>
  </div>
<?php } ?>
