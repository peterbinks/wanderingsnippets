<?php snippet('header') ?>
<?php snippet('home_menu') ?>

<section id="intro">
	<div class="container">
		<div class="">
			<?php echo kirbytext($page->intro()) ?>
		</div>
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
