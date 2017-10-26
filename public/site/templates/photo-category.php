<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
        <?php echo kirbytext($page->text()) ?>
    </div>
</section>
<?php if($page->slideshow()->isNotEmpty()): ?>
<section id="gallery-1">
    <div class="container">
        <h2 class="gallery-title"><?php echo $page->gallerytitle() ?></h2>
    </div>
    <div class="gallery">
        <?php foreach($page->slideshow()->yaml() as $image): ?>
          <?php if($image = $page->image($image)): ?>
            <?= $image->html(); ?>
          <?php endif ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif ?>
<?php if($page->slideshow2()->isNotEmpty()): ?>
<section id="gallery-2">
    <div class="container">
        <h2 class="gallery-title"><?php echo $page->gallerytitle2() ?></h2>
    </div>
    <div class="gallery">
        <?php foreach($page->slideshow2()->yaml() as $image): ?>
          <?php if($image = $page->image($image)): ?>
            <?= $image->html(); ?>
          <?php endif ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif ?>
<?php if($page->slideshow3()->isNotEmpty()): ?>
<section id="gallery-3">
    <div class="container">
        <h2 class="gallery-title"><?php echo $page->gallerytitle3() ?></h2>
    </div>
    <div class="gallery">
        <?php foreach($page->slideshow3()->yaml() as $image): ?>
          <?php if($image = $page->image($image)): ?>
            <?= $image->html(); ?>
          <?php endif ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif ?>
<?php snippet('footer') ?>
