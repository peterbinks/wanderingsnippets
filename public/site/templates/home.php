<?php snippet('header') ?>
<?php snippet('menu') ?>

<section id="main">
	<div class="container">
		<div class="">
			<?php echo kirbytext($page->intro()) ?>
		</div>
		<div class="">
			<h3 style="text-align: center;">Check Out My Instagram</h3>
			<ul id="instafeed"></ul>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
