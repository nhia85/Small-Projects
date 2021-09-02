<?php

/* BEGIN MOBILE DETECTION*/
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
if ($iphone || $android || $palmpre || $ipod ||  $berry == true)
{
	?>
<div id="haa-lp-nav">
<nav class="mob-c2a for-mob">
    <a class="mob-call" href="tel:<?php echo $phonelink; ?>" id="">
       <div class="row">
       <div class="small-3 medium-3 large-3 columns">
             <img src="<?php echo $assets;?>assets/images/phone-icon.png"  alt="phone icon"/>
       </div>
       <div class="small-8 medium-8 large-8 columns">
          <ul id="MobileNav" class="mobile-nav">
            <li class="cb-headline">Call Us Now!</li>
            <li class="bc-subhead">Free Confidential Consultation</li>
        </ul>
       </div>
       </div>
    </a>
</nav>
</div>
<?php
};
?>
