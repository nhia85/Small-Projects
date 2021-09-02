<?php
/**
 * Created by PhpStorm.
 * User: cheng.lee
 * Date: 3/8/2019
 * Time: 2:49 PM
 */
?>

<div class="row r2 ipad-display">

    <div class="columns small-12 show-for-small-only r2-c1">

        <div class="r2-c1-li-wrap">
            <?php include __DIR__.('/../bk/qs.php'); ?>
        </div>
    </div>

    <!-- IPAD & IPAD PRO DISPLAY -->

        <div class="columns medium-6 large-5 hide-for-small-only r2-c1 ">

            <div class="">
                <?php include __DIR__.('/../bk/qs-ipad-alt.php'); ?>
            </div>

        </div>


        <div class="columns medium-6 large-6 hide-for-small-only r2-c1 ">

            <div class="">
                <img src="<?php echo $assets; ?>assets/images/maps/<?php echo $map;?>.jpg" class="r2-map" alt="Maps"/>
            </div>

        </div>
    </div>

</div>