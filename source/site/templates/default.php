<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
        <?php echo kirbytext($page->text()) ?>
    </div>
</section>
<section id="gallery">
    <div class="gallery">
        <?php foreach($page->slideshow()->yaml() as $image): ?>
          <?php if($image = $page->image($image)): ?>
            <?= $image->html(); ?>
          <?php endif ?>
        <?php endforeach; ?>
    </div>
</section>
<?php snippet('footer') ?>
