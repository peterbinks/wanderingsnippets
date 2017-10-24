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
<section id="insta">
	<div class="container">
		<div class="">
			<h3 style="text-align: center;"><a href="https://instagram.com/melodyelanelson"> Instagram</a></h3>
			<ul id="instafeed"></ul>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
