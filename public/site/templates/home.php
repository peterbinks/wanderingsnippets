<?php snippet('header') ?>
<?php snippet('home_menu') ?>

<section id="main">
	<div class="container">
		<div class="">
			<?php echo kirbytext($page->intro()) ?>
		</div>
		<div class="">
			<h3 style="text-align: center;"><a href="https://instagram.com/melodyelanelson"> Instagram</a></h3>
			<ul id="instafeed"></ul>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
