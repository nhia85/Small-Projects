<?php
/*
Template Name: Default
*/
?>
<?php
// Set Up Project Variables
// --------------------------------------
$dynamic_phone = '501-476-6941';
$client = 'NiBlock';
$description = 'SEO Description'; // do not add client name
$gtm_id = 'GTM-WFQ7RGR';

// --------------------------------------
?>


<?php
//gets the the GEzO parameter to setup page dynamics
if(isset($_GET['geo'])) {
    $geo = $_GET['geo'];
} else {
    $geo = "place";
}

//gets the &camp query and populates the headline with it
if(isset($_GET['camp'])) {
    $haa_query = $_GET['camp'];
} else {
    $haa_query = "";
}


switch ($geo) {



    case "searcy":

        $addr1 = '';

        $addr2 = '';

        $state = "Arkansas";

        $map = 'searcy';

        $header = 'searcy-background';

        break;

    case "little-rock":

        $addr1 = '';

        $addr2 = '';

        $state = "Arkansas";

        $map = 'little-rock';

        $header = 'little-rock-background';

        break;

    default:

        $addr1 = '';

        $addr2 = '';

        $state = "Arkansas";

        $map = 'little-rock';

        $header = 'little-rock-background';

        break;

}


switch ($haa_query) {

    case "general":
        //$camp = '<span id="title-general">$0 Down Bankruptcy <br> <span id="title-general-2">Don\'t Pay A Dime On Attorney Fees To Get Chapter 13 Filed*</span></span>';
        $camp = '<span id="title-default"> Same Day<br class="hide-for-small-only"> Bankruptcy Filing</span>';
        $camp2 = '<span id="title-default"> Same Day Filing</span>';
        $campClass = 'general';
        break;

        //Rob wants to use Same Day Filing for all of the Headlines 5/21/20
        /*
    case "chapter-7":
        $camp = '<span id="title-chapter-7">$0 Down Chapter 7 Bankruptcy <br> <span>To Get Started Now!</span></span>';
        $camp2 = '<span id="title-chapter-7">$0 Down Chapter 7 Bankruptcy <br> <span>To Get Started Now!</span></span>';
        $campClass = 'chapter-7';
        break;

    case "chapter-13":
        $camp = '<span id="title-chapter-13">$0 Down Chapter 13 Bankruptcy <br> <span>Don\'t Pay A Dime On Attorney Fees To Get Chapter 13 Filed*</span></span>';
        $camp2 = '<span id="title-chapter-13">$0 Down Chapter 13 Bankruptcy <br> <span>Don\'t Pay A Dime On Attorney Fees To Get Chapter 13 Filed*</span></span>';
        $campClass = 'chapter-13';
        break;
        */

    default:
    // $camp = '<span id="title-default"> $0 Down Bankruptcy <br> <span>Don\'t Pay A Dime On Attorney Fees To Get Chapter 13 Filed*</span></span>';
    $camp = '<span id="title-default"> Same Day<br class="hide-for-small-only"> Bankruptcy Filing</span>';
    $camp2 = '<span id="title-default"> Same Day Filing</span>';
    $campClass = 'general';
}
?>

<?php include('core-files/top.php'); ?>

<?php include('core-files/review-arrays.php') ?>

<?php include('core-files/content.php'); ?>

<?php include('core-files/bottom.php'); ?>