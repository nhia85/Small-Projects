<!-- Loops through each review section -->
<?php foreach($reviewSections as $reviewSection) : ?>
  <div class="bgColor grid-x">
  <div id="<?php echo $reviewSection['id']; ?>" class="review">
    <h1><?php echo $reviewSection['title']; ?></h1>
    <!-- <br> -->
    <!-- Loops through each review and displays the author and text -->
    <?php foreach($reviewSection['reviews'] as $reviews) : ?>
      <div class="reviewQuote">
        <p>"<?php echo $reviews['text']; ?>"</p>
        <h2><?php if(!empty($reviews['author'])) { echo " - " . $reviews['author']; } ?></h2>
      </div>
      <br>
    <?php endforeach; ?>
  </div>
</div>
<?php endforeach; ?>
