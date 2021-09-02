<div id="reviews">
<!-- Loops through each review section -->
<?php foreach($reviewSections as $reviewSection) : ?>
<div class="wrapper ">
    <div class="grid">
    <div class="slot-1-1-1">
      <div id="<?php echo $reviewSection['id']; ?>" class="review">
        <h3 class="review-title"><?php echo $reviewSection['title']; ?></h3>
        <!-- <br> -->
        <!-- Loops through each review and displays the author and text -->
        <?php foreach($reviewSection['reviews'] as $reviews) : ?>
          <div class="reviewQuote">
            <p>"<?php echo $reviews['text']; ?>"</p>
            <h4 class="review-name"><?php if(!empty($reviews['author'])) { echo " - " . $reviews['author']; } ?></h4>
          </div>
          <br>
        <?php endforeach; ?>
      </div>
    </div>
    </div>
</div>
<?php endforeach; ?>
</div>