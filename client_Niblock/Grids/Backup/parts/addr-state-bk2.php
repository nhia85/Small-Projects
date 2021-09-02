<?php
// Partial template
// pulled as the default list of addresses
?>


<?php
/*=================================================
Begin funky-fresh new addr markup
=================================================*/
?>

<!-- ********************* MOBILE ROW 4 OFFICE LISTING **************************-->

<div class="column">
<div class="row r3-r1 align-center default-addr small-12 medium-12">


<?php if ($geo == 'twin-651' || $geo == "twin-763" || $geo == "twin-952") { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'duluth') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'mankato') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'minneapolis') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'rochester') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'saint-cloud') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'saint-paul') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'cook') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'lake') { ?>
  <div class="small-12 medium-2  body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-10 large-8 r3-r3-c3">
    <p  class="bk-experience-2">One Of Minnesota's Most <br> Experienced Bankruptcy Law Firms</p>
  </div>
  


<?php } elseif ($geo == 'twin-ports') { ?>
  <div class="small-12 medium-2  body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-10 large-8 r3-r3-c3">
    <p  class="bk-experience-2">One Of Minnesota's Most <br> Experienced  Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'carlton') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'itasca') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'koochiching') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>

<?php } elseif ($geo == 'aitkin') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'cass') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'crow-wing') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'beltrami') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'stearns') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'benton') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'morrison') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'mille-lacs') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'kanabec') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'pine') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/duluth.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'chisago') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'isanti') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>



<?php } elseif ($geo == 'sherburne') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-12 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'rice') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class="small-12 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p id="freeconsultation">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'steele') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'waseca') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'mower') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>


  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'freeborn') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'blue-earth') { ?>

    <div class="small-6 medium-2 body-offices">
        <?php
        include(locate_template('LPV3/parts/Addresses/mankato.php'));
        ?>
    </div>
    <div class="small-6 medium-2 body-offices">
        <?php
        include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
        ?>
    </div>


    <div class="small-12 medium-8 r3-r3-c3">
      <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
    </div>


<?php } elseif ($geo == 'le-sueur') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'nicollet') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'brown') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'watonwan') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'meeker') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'mcleod') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'sibley') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/mankato.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'carver') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>
  <div class="small-12 medium-8 large-6 r3-r3-c3">
    <p  class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'scott') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'anoka') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>
  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'dakota') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>
  <div class="small-12 medium-8 large-6 r3-r3-c3">
    <p  class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'washington') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>
  <div class="small-12 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p id="freeconsultation">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'olmsted') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'winona') { ?>
  <div class="small-12 medium-2  body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-10 large-8  r3-r3-c3">
    <p  class="bk-experience-2">One Of Minnesota's Most <br> Experienced  Bankruptcy Law Firms</p>
  </div>
  


<?php } elseif ($geo == 'goodhue') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'wabasha') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'wright') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class="small-12 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'dodge') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/rochester.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'clay') { ?>
  <div class="small-12 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-10 large-8 r3-r3-c3">
    <p  class="bk-experience-2">One Of Minnesota's Most <br> Experienced  Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'otter-tail') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'grant') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'douglas') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'pope') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'todd') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'stevens') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'wadena') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'kandiyohi') { ?>
  <div class="small-12 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-cloud.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>

<?php } elseif ( $geo == "ramsey-c" || $geo == "ramsey-h" || $geo == "ramsey-k") { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>

  <?php } elseif ($geo == 'ramsey-a' ) { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p  class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-g' || $geo == 'ramsey-i' || $geo == 'ramsey-l') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-b') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p id="freeconsultation">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>

<?php } elseif ($geo == 'ramsey-d') { ?>
  <div class="small-6 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-e') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-f') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p id="freeconsultation">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-j') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/woodbury.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-m') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>


  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p  class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'ramsey-n') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/forest-lake.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p  class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ( $geo == 'hennepin-g' || $geo == 'hennepin-h') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-8 large-6 r3-r3-c3">
    <p class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy  Law Firms</p>
  </div>

  <?php } elseif ($geo == 'hennepin-f') { ?>
    <div class="small-6 medium-2 body-offices">
        <?php
        include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
        ?>
    </div>
    <div class="small-6 medium-2 body-offices">
        <?php
        include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
        ?>
    </div>
  
    <div class="small-12 medium-8 large-8  r3-r3-c3">
      <p class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy  Law Firms</p>
    </div>
  

<?php } elseif ($geo == 'hennepin-a') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-b') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eagan.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-c') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices miniwidget-four">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-6 large-4 r3-r3-c3">
    <p class="bk-experience-4">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-d') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-e') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-i') { ?>
  <div class="small-6 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-j') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-k') { ?>
  <div class="small-6 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-l') { ?>
  <div class="small-6 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-m') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-n') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-o') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-p') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-q') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-r') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-s') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class=" show-for-large medium-2  body-offices">
      <?php
      include __DIR__.('/bk/google-review-widget-small.php');
      ?>
  </div>

  <div class="small-12 medium-8 large-6 r3-r3-c3">
    <p class="bk-experience-3">One Of Minnesota's Most<br> Experienced Bankruptcy  Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-t') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-u') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-8 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-v') { ?>
  <div class="small-6 medium-2 body-offices2-1">
      <?php
      include(locate_template('LPV3/parts/Addresses/eden-prairie.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-2">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices2-3">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>

  <div class="small-12 medium-6 r3-r3-c3">
    <p id="freeconsultation">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } elseif ($geo == 'hennepin-w') { ?>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/st-louis-park.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/maple-grove.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/anoka.php'));
      ?>
  </div>
  <div class="small-6 medium-2 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/brooklyn-center.php'));
      ?>
  </div>

  <div class="small-12 medium-4 r3-r3-c3">
    <p id="freeconsultation3">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>


<?php } else { ?>
  <div class="small-6 medium-2 medium-offset-1 body-offices">
      <?php
      include(locate_template('LPV3/parts/Addresses/roseville.php'));
      ?>
  </div>

  <div class="small-12 medium-8 medium-offset-1 r3-r3-c3">
    <p id="freeconsultation2">One Of Minnesota's Most<br> Experienced Bankruptcy Law Firms</p>
  </div>

<?php } ?>





</div>

</div>







<?php
/*=================================================
End funky-fresh new addr markup
=================================================*/
?>
